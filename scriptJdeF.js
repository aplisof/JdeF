/* begin Page */


function consultarRNew(cedula,grupo){
var strParam = "registroreunion.php?ir="+cedula+"&grupo="+grupo;
	location.href = strParam;
}

function BorrarMin(Ministerio,Nombre, cedula){
	var strParam = "borrarRegistro.php?cedula="+cedula+"&Nombre="+Nombre+"&Ministerio="+Ministerio;
	window.open(strParam,"Eliminación de Registro");
	//location.href = strParam;
} 

	
function matricularMin(Ministerio,Nombre, cedula){
	var strParam = "grabarmin.php?cedula="+cedula+"&Nombre="+Nombre+"&Ministerio="+Ministerio;
	location.href = strParam;
} 

function consultarR(){
	window.location.href='registroreunion.php?ir='+document.getElementById('cedula').value;
}

function consultarIntegrante(){
	window.location.href='registrointegrante.php?cc='+document.getElementById('cedula').value;
}
function limpiarIntegrante(){
	window.location.href='registrointegrante.php?cc=';
}
function limpiarR(){
	window.location.href='registroreunion.php?ir=';
}

function consultarGrupo(){
	window.location.href='registrogrupo.php?ig='+document.getElementById('cedula').value;
}

function limpiar(){
	window.location.href='registrogrupo.php?ig=';
}

function validarFormGrupo(){	
	var form = document.forms["form1"];
	var strMsg="";
	var strHead = "Antes de continuar Revise ?\n\n"
	
	var strCedula = form.cedula.value;
	var strNombreG=form.nombreg.value;
	var strIdlp=form.idlp.value;
	var strNombrelp=form.nombrelp.value;
	var strIdls=form.telper.value;
	var strNombrels=form.telmov.value; 
	
	if (strCedula == "" || isNaN(strCedula) ) {
		strMsg+= "Id. Grupo debe ser numérico \n";
	}
	
	if( strNombreG == null || strNombreG.length == 0 || /^\s+$/.test(strNombreG) ){
		strMsg+= "Nombre Grupo no puede estar en blanco\n";
	}
	
	if (strIdlp == "" || isNaN(strIdlp)){
		strMsg+= "Identificaci\u00f3n L\u00edder Principal, debe ser num\u00e9rico \n";
	}
	
	if( strNombrelp == null || strNombrelp.length == 0 || /^\s+$/.test(strNombrelp) ){
		strMsg+= "Nombre L\u00edder Principal no puede estar en blanco\n";
	}
	
	if (strMsg!=""){
		strMsg = strHead + strMsg;
		alert(strMsg);
		return false;
	}
	
	var strParam = "actualizargrupo.php?nombreg=" + strNombreG +"&idlp=" + strIdlp+"&nombrelp=" + strNombrelp + "&telper="+strIdls+"&telmov=" + strNombrels +"&cedula="+strCedula;
	location.href = strParam;		
}

function validarFormGrupo1(){	
	var form = document.forms["form1"];
	var strMsg="";
	var strHead = "Antes de continuar Revise ?\n\n"
	
	var strCedula = form.cedula.value;
	var strNombreG=form.nombreg.value;
	var strIdlp=form.idlp.value;
	var strNombrelp=form.nombrelp.value;
	var strIdls=form.telper.value;
	var strNombrels=form.telmov.value; 
	
	if (strCedula == "" || isNaN(strCedula) ) {
		strMsg+= "Id. Grupo debe ser numérico \n";
	}
	
	if( strNombreG == null || strNombreG.length == 0 || /^\s+$/.test(strNombreG) ){
		strMsg+= "Nombre Grupo no puede estar en blanco\n";
	}
	
	if (strIdlp == "" || isNaN(strIdlp)){
		strMsg+= "Identificaci\u00f3n L\u00edder Principal, debe ser num\u00e9rico \n";
	}
	
	if( strNombrelp == null || strNombrelp.length == 0 || /^\s+$/.test(strNombrelp) ){
		strMsg+= "Nombre L\u00edder Principal no puede estar en blanco\n";
	}
	
	if (strMsg!=""){
		strMsg = strHead + strMsg;
		alert(strMsg);
		return false;
	}
	
	var strParam = "grabargrupo.php?nombreg=" + strNombreG +"&idlp=" + strIdlp+"&nombrelp=" + strNombrelp + "&telper="+strIdls+"&telmov=" + strNombrels +"&cedula="+strCedula;
	location.href = strParam;		
}


function regresarGrupo(grupo){
	var strParam = "registrogrupo.php?ig="+grupo;
	location.href = strParam;
}

function mostrarReunion(cedula){
	var strParam = "registroreunion.php?grupo="+cedula;
	location.href = strParam;
}

function mostrarMinisterio(cedula){
	var strParam = "mostrarministerios.php?cc="+cedula;
	location.href = strParam;
}



function validarFormReunion1(){	
	var form = document.forms["form1"];
	var strMsg="";
	var strHead = "Antes de continuar Revise ?\n\n"
	
	var strCedula = form.cedula.value;
	var strDesRe=form.desre.value;
	var strTipRE=form.treun.value;
	var strIdAnf=form.idan.value;
	var strNomAnf=form.noman.value;
	var strDirAnf=form.dir.value; 
	var strTelAnf=form.tel.value;
	var strDiRe=form.diar.value;
	var strHora=form.hreu.value; 
	
	if (strCedula == "" || isNaN(strCedula) ) {
		strMsg+= "Id. Reuni\u00f3n debe ser num\u00e9rico \n";
	}
	
	if( strDesRe == null || strDesRe.length == 0 || /^\s+$/.test(strDesRe) ){
		strMsg+= "La descripci\u00f3n no puede estar en blanco\n";
	}
	
	if( strTipRE == null || strTipRE.length == 0 || /^\s+$/.test(strTipRE) ){
		strMsg+= "El tipo de Reuni\u00f3n no puede estar en blanco\n";
	}
	if (strIdAnf == "" || isNaN(strIdAnf)){
		strMsg+= "Identificaci\u00f3n anfitri\u00f3n, debe ser num\u00e9rico \n";
	}
	
	if( strNomAnf == null || strNomAnf.length == 0 || /^\s+$/.test(strNomAnf) ){
		strMsg+= "Nombre anfitri\u00f3n no puede estar en blanco\n";
	}
	
	if( strDirAnf == null || strDirAnf.length == 0 || /^\s+$/.test(strDirAnf) ){
		strMsg+= "Direcci\u00f3n anfitri\u00f3n no puede estar en blanco\n";
	}
	
	if( strDiRe == null || strDiRe.length == 0 || /^\s+$/.test(strDiRe) ){
		strMsg+= "D\u00eda reun\u00f3n no puede estar en blanco\n";
	}
	
	if( strHora == null || strHora.length == 0 ){
		strMsg+= "Hora reun\u00f3n no puede estar en blanco\n";
	}

	if (strMsg!=""){
		strMsg = strHead + strMsg;
		alert(strMsg);
		return false;
	}	
	var strParam = "grabarreunion.php?desre=" + strDesRe +"&treun=" + strTipRE+"&idan=" + strIdAnf + "&noman="+strNomAnf+"&dir=" + strDirAnf +"&tel=" + strTelAnf+"&diar=" + strDiRe+"&hreu=" + strHora+"&cedula="+strCedula;
	location.href = strParam;		
}


function validarFormReunion(){	
	var form = document.forms["form1"];
	var strMsg="";
	var strHead = "Antes de continuar Revise ?\n\n"
	var strCedula = form.cedula.value;
	var strDesRe=form.desre.value;
	var strTipRE=form.treun.value;
	var strIdAnf=form.idan.value;
	var strNomAnf=form.noman.value;
	var strDirAnf=form.dir.value; 
	var strTelAnf=form.tel.value;
	var strDiRe=form.diar.value;
	var strHora=form.hreu.value; 
	
	if (strTelAnf.length <7 ){
		strMsg+= "Teléfono Erroneo debe contener entre 7 y 10 digitos\n";
	}
	
	if (strCedula == "" || isNaN(strCedula) ) {
		strMsg+= "Id. Reuni\u00f3n debe ser num\u00e9rico \n";
	}
	
	if( strDesRe == null || strDesRe.length == 0 || /^\s+$/.test(strDesRe) ){
		strMsg+= "La descripci\u00f3n no puede estar en blanco\n";
	}
	
	if( strTipRE == null || strTipRE.length == 0 || /^\s+$/.test(strTipRE) ){
		strMsg+= "El tipo de Reuni\u00f3n no puede estar en blanco\n";
	}
	if (strIdAnf == "" || isNaN(strIdAnf)){
		strMsg+= "Identificaci\u00f3n anfitri\u00f3n, debe ser num\u00e9rico \n";
	}
	
	if( strNomAnf == null || strNomAnf.length == 0 || /^\s+$/.test(strNomAnf) ){
		strMsg+= "Nombre anfitri\u00f3n no puede estar en blanco\n";
	}
	
	if( strDirAnf == null || strDirAnf.length == 0 || /^\s+$/.test(strDirAnf) ){
		strMsg+= "Direcci\u00f3n anfitri\u00f3n no puede estar en blanco\n";
	}
	
	if( strDiRe == null || strDiRe.length == 0 || /^\s+$/.test(strDiRe) ){
		strMsg+= "D\u00eda reun\u00f3n no puede estar en blanco\n";
	}
	
	if( strHora == null || strHora.length == 0 ){
		strMsg+= "Hora reun\u00f3n no puede estar en blanco\n";
	}

	if (strMsg!=""){
		strMsg = strHead + strMsg;
		alert(strMsg);
		return false;
	}	
	var strParam = "actualizarreunion.php?desre=" + strDesRe +"&treun=" + strTipRE+"&idan=" + strIdAnf + "&noman="+strNomAnf+"&dir=" + strDirAnf +"&tel=" + strTelAnf+"&diar=" + strDiRe+"&hreu=" + strHora+"&cedula="+strCedula;
	location.href = strParam;		
}

function validarFormIntegrante1(){	
	var form = document.forms["form1"];
	var strMsg="";
	var strHead = "Antes de continuar Revise ?\n\n"
	var strCedula = form.cedula.value;
	var strNom=form.nombres.value;
	var strApe=form.apellidos.value;
	var strFna=form.fna.value;
	var strDir=form.dir.value;
	var strBar=form.bar.value; 
	var strTel=form.telper.value;
	var strTelmov=form.telmov.value;
	var strEmail=form.email.value; 
	var strNe=form.ne.value; 
	var strAc=form.ac.value; 
	var strPr=form.pr.value; 
	var strEcivil=form.ecivil.value; 
	var strNh=form.nh.value; 
	var strGrupoc=form.grupoc.value; 
	var strAg=form.ag.value; 
	var strFi=form.fi.value; 
	var strBau=form.bau.value; 
	var strFbau=form.fbau.value; 
	var strEfor=form.efor.value; 
	var strEsli=form.esli.value; 
	var strLidera=form.lidera.value; 
	var strAcon=form.acon.value; 
	var strFun=form.fun.value; 
	
	if( strNom == null || strNom.length == 0 || /^\s+$/.test(strNom) ){
		strMsg+= "Nombres no puede estar en blanco\n";
	}
	
	if( strApe == null || strApe.length == 0 || /^\s+$/.test(strApe) ){
		strMsg+= "Apellidos no puede estar en blanco\n";
	}
	
	if( strDir == null || strDir.length == 0 || /^\s+$/.test(strDir) ){
		strMsg+= "Direcci\u00f3n no puede estar en blanco\n";
	}
	
	if( strBar == null || strBar.length == 0 || /^\s+$/.test(strBar) ){
		strMsg+= "Barrio no puede estar en blanco\n";
	}
	
	if( strEmail == null || strEmail.length == 0 || /^\s+$/.test(strEmail) ){
		strMsg+= "Email no puede estar en blanco\n";
	}
	
	if( strNe == null || strNe.length == 0 || /^\s+$/.test(strNe) ){
		strMsg+= "Nivel educativo no puede estar en blanco\n";
	}
	
	if( strAc == null || strAc.length == 0 || /^\s+$/.test(strAc) ){
		strMsg+= "Nivel educativo no puede estar en blanco\n";
	}
	
	if( strPr == null || strPr.length == 0 || /^\s+$/.test(strPr) ){
		strMsg+= "Nivel educativo no puede estar en blanco\n";
	}
	
	if( strEcivil == null || strEcivil.length == 0 || /^\s+$/.test(strEcivil) ){
		strMsg+= "Nivel educativo no puede estar en blanco\n";
	}
	
	if (strMsg!=""){
		strMsg = strHead + strMsg;
		alert(strMsg);
		return false;
	}
	var strParam = "grabarintegrante.php?nombres=" + strNom +"&apellidos=" + strApe+"&fna=" + strFna + "&dir="+strDir+"&bar="+ strBar +"&telper=" + strTel+"&telmov=" + strTelmov+"&email="+ strEmail+"&ne="+ strNe+"&ac="+ strAc+"&pr="+ strPr+"&ecivil="+ strEcivil+"&nh="+ strNh+"&grupoc="+ strGrupoc+"&ag="+ strAg+"&fi="+ strFi+"&bau="+ strBau+"&fbau="+ strFbau+"&efor="+ strEfor+"&esli="+ strEsli+"&lidera="+ strLidera+"&acon="+ strAcon+"&fun="+ strFun+"&cedula="+strCedula;
	location.href = strParam;		
}

function validarFormIntegrante(){	
	var form = document.forms["form1"];
	var strMsg="";
	var strHead = "Antes de continuar Revise ?\n\n"
	var strCedula = form.cedula.value;
	var strNom=form.nombres.value;
	var strApe=form.apellidos.value;
	var strFna=form.fna.value;
	var strDir=form.dir.value;
	var strBar=form.bar.value; 
	var strTel=form.telper.value;
	var strTelmov=form.telmov.value;
	var strEmail=form.email.value; 
	var strNe=form.ne.value; 
	var strAc=form.ac.value; 
	var strPr=form.pr.value; 
	var strEcivil=form.ecivil.value; 
	var strNh=form.nh.value; 
	var strGrupoc=form.grupoc.value; 
	var strAg=form.ag.value; 
	var strFi=form.fi.value; 
	var strBau=form.bau.value; 
	var strFbau=form.fbau.value; 
	var strEfor=form.efor.value; 
	var strEsli=form.esli.value; 
	var strLidera=form.lidera.value; 
	var strAcon=form.acon.value; 
	var strFun=form.fun.value; 
	

	if( strApe == null || strApe.length == 0 || /^\s+$/.test(strApe) ){
		strMsg+= "Apellidos no puede estar en blanco\n";
	}
	
	if( strDir == null || strDir.length == 0 || /^\s+$/.test(strDir) ){
		strMsg+= "Direcci\u00f3n no puede estar en blanco\n";
	}
	
	if( strBar == null || strBar.length == 0 || /^\s+$/.test(strBar) ){
		strMsg+= "Barrio no puede estar en blanco\n";
	}
	
	if( strEmail == null || strEmail.length == 0 || /^\s+$/.test(strEmail) ){
		strMsg+= "Email no puede estar en blanco\n";
	}
	
	if( strNe == null || strNe.length == 0 || /^\s+$/.test(strNe) ){
		strMsg+= "Nivel educativo no puede estar en blanco\n";
	}
	
	if( strAc == null || strAc.length == 0 || /^\s+$/.test(strAc) ){
		strMsg+= "Nivel educativo no puede estar en blanco\n";
	}
	
	if( strPr == null || strPr.length == 0 || /^\s+$/.test(strPr) ){
		strMsg+= "Nivel educativo no puede estar en blanco\n";
	}
	
	if( strEcivil == null || strEcivil.length == 0 || /^\s+$/.test(strEcivil) ){
		strMsg+= "Nivel educativo no puede estar en blanco\n";
	}
	
	if (strMsg!=""){
		strMsg = strHead + strMsg;
		alert(strMsg);
		return false;
	}
	var strParam = "actualizarintegrante.php?nombres=" + strNom +"&apellidos=" + strApe+"&fna=" + strFna + "&dir="+strDir+"&bar="+ strBar +"&telper=" + strTel+"&telmov=" + strTelmov+"&email="+ strEmail+"&ne="+ strNe+"&ac="+ strAc+"&pr="+ strPr+"&ecivil="+ strEcivil+"&nh="+ strNh+"&grupoc="+ strGrupoc+"&ag="+ strAg+"&fi="+ strFi+"&bau="+ strBau+"&fbau="+ strFbau+"&efor="+ strEfor+"&esli="+ strEsli+"&lidera="+ strLidera+"&acon="+ strAcon+"&fun="+ strFun+"&cedula="+strCedula;
	location.href = strParam;		
}



function borrarIntegrante(cedula){
var form = document.forms["form1"];
	var strCedula = form.cedula.value;
	var strParam = "borrarintegrante.php?cedula="+strCedula;
	location.href = strParam;
}
//****************************************************

function regresarInt(cedula){
	var strParam = "registrointegrante.php?cc="+cedula;
	location.href = strParam;
}

//******************************************************

/* end Page */


