<?php

  $data=getDataFromXml("http://www.conduciendo.com/msnxml/".($_GET["file"]?$_GET["file"]:"NOTAINT_20100802000575.xml"));

  $output=convertToNewsMl($data,"newsml_nota_container.phtml");

  storeOutputPrint($output);













  function getDataFromXml($file){

    $data=array();

    if(function_exists("simplexml_load_file")){

      $xml=simplexml_load_file($file);

      if($xml->NewsML->NewsItem){

        $news=$xml->NewsML->NewsItem;

      }

      if($xml->Nota){

        $news=$xml->Nota;

      }

      if(!$news) $news=array($xml);

      if($news){

        $i=0;

        foreach($news as $newsItem){

          foreach($newsItem->children() as $field){



            $data[$i][strtolower((string)$field->getName())]=(string)$field;

          }

          $i++;

        }

      }

    }else{

      //Proximamente - compatibilidad php4

      $content=implode("",file($file));

      $data["codigo"]=preg_replace("/.*<codigo>([^<]+)</codigo>.*/","$1",$content);

      $data[""]=preg_replace("/.*<codigo>([^<]+)</subtitulo>.*/","$1",$content);

    }

    for($i=0;$i<count($data);$i++){

      if(!$data[$i]["codigo"]) $data[$i]["codigo"]=$data[$i]["codigonota"];

      $data[$i]["imagenprincipal"]=str_replace("http://conduciendo.com/","http://www.conduciendo.com/",$data[$i]["imagenprincipal"]);

      $data[$i]["urllogomarca"]=str_replace("http://conduciendo.com/","http://www.conduciendo.com/",$data[$i]["urllogomarca"]);

      $data[$i]["logoconduciendo"]=str_replace("http://conduciendo.com/","http://www.conduciendo.com/",$data[$i]["logoconduciendo"]);

      $data[$i]["imagenprincipal_size"]=calculateSizeFromFile($data[$i]["imagenprincipal"]);

      $data[$i]["urllogomarca_size"]=calculateSizeFromFile($data[$i]["urllogomarca"]);

      $data[$i]["logoconduciendo_size"]=calculateSizeFromFile($data[$i]["logoconduciendo"]);

      $data[$i]["cuerpo_parrafos"]=split("\n",$data[$i]["cuerpo"]);

      list($data[$i]["fechapublicacion_dd"],$data[$i]["fechapublicacion_mm"],$data[$i]["fechapublicacion_yyyy"])=split("\/",$data[$i]["fechapublicacion"]);

      $data[$i]["linknota"]="http://conduciendo.com/visor.php?uid=".$data[$i]["codigo"];

      //var_dump($data[$i]);

    }

    return $data;

  }

  function calculateSizeFromFile($file){

    $ret=array();

    if($file){

      $ret=getimagesize($file);

      $ret["filesize"]=getSizeFile($file);

    }

    return $ret;

  }

  function getSizeFile($url) {

      if (substr($url,0,4)=='http') {

          $x = array_change_key_case(get_headers($url, 1),CASE_LOWER);

          if ( strcasecmp($x[0], 'HTTP/1.1 200 OK') != 0 ) { $x = $x['content-length'][1]; }

          else { $x = $x['content-length']; }

      }

      else {

        $x = @filesize($url);

      }



      return $x;

  }



  function getDataFromDb(){

    //Proximamente

  }

  function convertToNewsMl(&$data,$render){

    //var_dump($data);

    ob_start();

    include($render);

    $output=ob_get_clean();

    return $output;

  }

  function storeOutputPrint(&$output){

    print str_replace("\n", "", $output);

  }


