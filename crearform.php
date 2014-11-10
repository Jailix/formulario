<?php
        $datos= array('form'=>array('metodo'=>'post', 'action'=>'crearform.php','legend'=>'Datos'),'input'=>array(array('label'=>'codigo','tipo'=>'text','value'=>10),
array('label'=>'Nombre','tipo'=>'text','value'=>'sr'),array('label'=>'','tipo'=>'submit','value'=>'calcular')));
        function formulario (&$datos){
            $form="";
            foreach ($datos as $posi=>$input){
                if($posi=='form'){
                    $form.="<form action=".$input['action']." method=".$input['metodo']."><legend>".$input['legend']."</legend>";
                }else{
                    $form.="<input label=".$input['label']." type=".$input['tipo']." value=".$input['value'].">";
                }
            }
            $form.="</form>";
        }
