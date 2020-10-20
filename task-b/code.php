<?php

    /*
     *  Function    : generateSentence()
     *
     *  Description : Generate a sentence listing out all items provided in an array.
     *
     *  Parameters  : (string)               start         - The start of the sentence
     *                (array[string])        items         - The list of items
     *                (string/array[string]) append        - (optional) item types to be appended to each item
     *
     *  Return      : string
     *
     *  Example     : See run.php for input/output examples
     *
     *  Test        : Execute run.php to test your implementation.
     *                (In console, simply run the command 'php run.php')
     *
     */


    function generateSentence($start, $items, $type = ""){
      $len = count($items);
      $list ="";

      if($type == ""){
        for($i=0; $i<$len; $i++){
                    if($i == $len-2){
                      $list .= $items[$i]." and ";
                    }
                    elseif($i == $len-1){
                        $list .= $items[$i].".";
                      }
                    else{
                      $list .= $items[$i].", ";
                    }
        }
      }
      else{
            if(!is_array($type) ){
                  for($i=0; $i<$len; $i++){
                              if($i == $len-2){
                                $list .= $items[$i]." ".$type." and ";
                              }
                              elseif($i == $len-1){
                                  $list .= $items[$i]." ".$type.".";
                                }
                              else{
                                $list .= $items[$i]." ".$type.", ";
                              }
                  }
            }
            else{
                  for($i=0; $i<$len; $i++){
                              if($i == $len-2){
                                $list .= $items[$i]." ".$type[$i]." and ";
                              }
                              elseif($i == $len-1){
                                  $list .= $items[$i]." ".$type[$i].".";
                                }
                              else{
                                $list .= $items[$i]." ".$type[$i].", ";
                              }
                  }
            }

      }
      return $start.": ".$list;

    }
