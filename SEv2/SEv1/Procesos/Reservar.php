<?php
/* Enviar E‐ mail con Respuesta Automática
*/
// Recibiendo los datos pasados por la pagina " form_contato. php"
$recibenombre = $_POST[ " nombre" ] ;
$recibemail = $_POST[ " email" ] ;
$recibemsg = $_POST[ " mensaj e" ] ;

// Definiendo las cabeceras del e‐ mail
$headers = " Content‐ type: text/html; charset=iso‐
8859‐ 1" ;
// Vamos a definir ahora el destinatario de e‐
mail, ya sea el de usted o el de su cliente.
$para = " ej emplocliente@email. com" ;
// Definiendo el aspecto del mensaj e
$mensaj e = " <h3>De: </h3> " ;
$mensaj e . = $recibenombre . $recibemail;
$mensaj e . = " <h3>Asunto: </h3>" ;
$mensaj e . = " Mensaj e del Sitio" ;
$mensaj e . = " <h3>Mensaj e</h3>" ;
$mensaj e . = " <p>" ;
$mensaj e . = $recibemsg;
$mensaj e . = " </p>" ;

// Enviando el mensaj e para el destinatario
$envia = mail( $para, " E‐
mail del Sitio" , $mensaj e, $headers) ;
// Envia un e‐
mail para el remitente, agradeciendo la visita en el sitio, y diciendo que en breve el e‐
mail sera respondido.
$mensaj e2 = " <p>Hola <strong>" . $recibenombre . "
</strong>. Agradecemos su visita y la oportunidad de recibir su contacto. Antes de 48 horas usted recibira un e‐
mail con la respuesta a su duda o pedido. . </p>" ;
$mensaj e2 . = "
<p>Observación ‐ No es necesario responder este mensaj e.
</p>" ;
$envia = mail( $recibemail, " Su mensaj e fué recibido! " , $mensaj e2
// Muestra en la pantalla el mensaj e de éxito, y después redirecciona de vuelta para la pagina del contacto.
echo " Mensaj e recibido con exito! " ;
echo " <meta http‐
equiv=' refresh' content=' 2; URL=form_contacto. php' >" ;

?>