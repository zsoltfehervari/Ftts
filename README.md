# Ftts
Text To Speech PHP Class via www.fromtexttospeech.com


Usage:

<pre><code>
$ftts = new Ftts();

$speed = 0; <br>
$input = "Hello World";

$dataUrl = $ftts->Alice($input,$speed);

echo <audio controls src='".$dataUrl."'></audio>;

</pre></code>

-----------------------------------------------------------------------------

Speech speed : min: -1 , max: 2


Languages and Voices:

English US : Alice,Daisy,George,Jenna,John.<br>
English UK : Emma,Harry.

French : Gabriel,Jade.

Spanish : Isabella,Mateo.

German : Michael,Nadine.

Italian : Alessandra,Giovanni.

Portuguese : Rodrigo.

Russian : Valentina.
