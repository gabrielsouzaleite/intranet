<?php
$link = mysqli_connect("localhost", "root", "", "nova_intranet");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

$results = mysqli_query($link, "SELECT * FROM `usuario`");

mysqli_close($link);

?>
<!DOCTYPE html>
<html>
<head>
	<title> Página Inicial </title>
	  <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css"  href="css/estilo.css" />
</head>
<body>
    <header id="header">
     <div id="logo">
    	<img src="imagens/logo2.png" style="max-width: 100px;">
     </div>
     <nav class="nav_menu" >
        <ul>
         <li>
     	     <a href="http://192.168.2.65/intranetforma/videos-institucionais/" title="Cultura Organizacional" target="_blank">Cultura Organizacional</a>
           <ul>
            <li>
              <a href="http://192.168.2.65/intranetforma/cultura-organizacional/quem-somos/" title="Quem Somos" target="_blank">Quem Somos</a>
            </li>
            <li>
              <a href="http://192.168.2.65/intranetforma/wp-content/uploads/2021/01/C%C3%B3digo-de-Cultura.pdf" title="Código de Cultura" target="_blank">Código de Cultura</a>
            </li>
            <li>
              <a href="http://192.168.2.65/intranetforma/wp-content/uploads/2021/01/Linha-do-tempo-Forma.pdf" title="Linha do Tempo" target="_blank">Linha do Tempo</a>
            </li>
            <li>
              <a href="http://192.168.2.65/intranetforma/cultura-organizacional/organograma/" title="Organograma" target="_blank">Organograma</a>
            </li>
            <li>
              <a href="http://192.168.2.65/intranetforma/cultura-organizacional/o-que-fazemos/" title="O que fazemos" target="_blank">O Que Fazemos</a>
            </li>
            <li>
              <a href="http://192.168.2.65/intranetforma/cultura-organizacional/quem-somos/" title="Quem Somos" target="_blank">Quem Somos</a>
            </li>
             <li>
              <a href="http://192.168.2.65/intranetforma/cultura-organizacional/nossa-cultura/" title="Nossa Cultura" target="_blank">Nossa Cultura</a>
            </li>
           </ul>
         </li>
         <li>
     	     <a href="http://192.168.2.65/intranetforma/videos-institucionais/" title="Videos Institucionais" target="_blank">Videos Institucionais</a>
         </li>
         <li>
     	     <a href="http://192.168.2.65/intranetforma/videos-institucionais/" title="Recursos Humanos" target="_blank">Recursos Humanos</a>
           <ul>
            <li>
              <a href="http://192.168.2.65/intranetforma/recursos-humanos/forma-beneficios/" title="Benefícios e Parcerias" target="_blank">Benefícios e Parcerias</a>
            </li>
            <li>
              <a href="http://192.168.2.65/intranetforma/recursos-humanos/integracao-novos-colaboradores/" title="Integração Novos Colaboradores" target="_blank">Integração Novos Colaboradores</a>
            </li>
            <li>
              <a href="http://192.168.2.65/intranetforma/wp-content/uploads/2020/07/Manual-do-colaborador-03.2020_REV-00.pdf" title="Manual do Colaborador" target="_blank">Manual do Colaborador</a>
            </li>
            <li>
              <a href="http://192.168.2.65/intranetforma/wp-content/uploads/2021/01/Manual-de-Procedimentos-Internos-2021_01_20_REV-13.pdf" title="Manual de Porcedimentos Internos" target="_blank">Manual de Porcedimentos Internos</a>
            </li>
            <li>
              <a href="http://192.168.2.65/intranetforma/wp-content/uploads/2020/10/Protocolo-Sanit%C3%A1rio-10.2020.pdf" title="Protocolo Sanitário" target="_blank">Protocolo Sanitário</a>
            </li>
            <li>
              <a href="http://192.168.2.65/intranetforma/recursos-humanos/recrutamento-interno/" title="Recrutamento Interno" target="_blank">Recrutamento Interno</a>
            </li>
           </ul>
         </li>
         <li>
     		   <a href="http://192.168.2.65/intranetforma/raio-x-cliente/" title="raio-x-cliente" target="_blank">Raio x do Cliente</a>
         </li>
         <li>
     		   <a href="http://192.168.2.65/intranetforma/videos-institucionais/" title="Nosso Time" target="_blank">Nosso Time</a>
           <ul>
            <li>
              <a href="http://192.168.2.65/intranetforma/ramais/" title="Ramais" target="_blank"> Ramais </a>            
            </li>
            <li>
              <a href="http://192.168.2.65/intranetforma/aniversariantes-2/" title="Aniversariantes" target="_blank">Aniversáriantes</a>
            </li>
           </ul>
         </li>
         <li>
     		   <a href="http://192.168.2.65/intranetforma/videos-institucionais/" title="Acontece na Forma" target="_blank">Acontece na Forma</a>
           <ul>
            <li>
              <a href="http://192.168.2.65/intranetforma/acontece-na-forma/fatos-fotos/" title="Fatos e Fotos" target="_blank"> Fatos e Fotos </a>            
            </li>
            <li>
              <a href="http://192.168.2.65/intranetforma/acontece-na-forma/forma-ambiental/" title="Forma Ambiental" target="_blank">Forma Ambiental</a>
            </li>
            <li>
              <a href="http://192.168.2.65/intranetforma/acontece-na-forma/forma-comunica/" title="Forma Comunica" target="_blank">Forma Comunica</a>
            </li>
            <li>
              <a href="http://192.168.2.65/intranetforma/?_redirected=yes#" title="Forma News" target="_blank">Forma News</a>
            </li>
            <li>
              <a href="http://192.168.2.65/intranetforma/acontece-na-forma/voce-sabia-que/" title="Você Sabia Que?" target="_blank">Você Sabia Que?</a>
            </li>
           </ul>
         </li>
         <li>
     		   <a href="http://192.168.2.65/intranetforma/videos-institucionais/" title="Links mais acessados" target="_blank">Links mais acessados</a>
         </li>        
        </ul>
     </nav>
  </header>
    <div style="padding-top: 200px;">
 	     <div class="menu_lateral" >
      <ul>
        <li>
          Instrução de Trabalho 
      	 <ul>      		
      		 <li>
            <a href="http://192.168.2.65/intranetforma/instrucoes-de-trabalho/administrativo/" title="Administrativo" target="_blank">Administrativo</a>
           </li>
           <li>
            <a href="http://192.168.2.65/intranetforma/instrucoes-de-trabalho/aprovacoes/" title="Aprovações" target="_blank"> Aprovações</a>
           </li>
           <li>
            <a href="http://192.168.2.65/intranetforma/instrucoes-de-trabalho/evtl/" title="EVTL" target="_blank">EVTL</a>
           </li>
           <li>
            <a href="http://192.168.2.65/intranetforma/instrucoes-de-trabalho/financeiro/" title="Financeiro" target="_blank">Financeiro</a>
           </li>
           <li>
            <a href="http://192.168.2.65/intranetforma/instrucoes-de-trabalho/projetos/" title="Projetos" target="_blank">Projetos</a>
           </li>
           <li>
            <a href="http://192.168.2.65/intranetforma/instrucoes-de-trabalho/rh/" title="RH" target="_blank">RH</a>
           </li>
      	</ul>
      </li>
      	<li>      		
      	Formulário e Requisições
          <ul>         
             <li>
              <a href="http://192.168.2.65/intranetforma/formularios-e-requisicoes/administrativo/" title="Administrativo" target="_blank">Administrativo</a>
            </li>
            <li>
              <a href="http://192.168.2.65/intranetforma/formularios-e-requisicoes/aprovacoes/" title="Aprovações" target="_blank"> Aprovações</a>
            </li>
            <li>
             <a href="http://192.168.2.65/intranetforma/formularios-e-requisicoes/evtl/" title="EVTL" target="_blank">EVTL</a>
            </li>
            <li>
              <a href="http://192.168.2.65/intranetforma/formularios-e-requisicoes/financeiro/" title="Financeiro" target="_blank">Financeiro</a>
            </li>
            <li>
              <a href="http://192.168.2.65/intranetforma/formularios-e-requisicoes/financeiro/" title="Projetos" target="_blank">Projetos</a>
            </li>
            <li>
              <a href="http://192.168.2.65/intranetforma/formularios-e-requisicoes/rh/" title="RH" target="_blank">RH</a>
           </li>
         </ul>
      	</li>
      	<li>      		
      		Modelos e Checklist
           <ul>         
             <li>
              <a href="http://192.168.2.65/intranetforma/modelos-e-checklist/administrativo/" title="Administrativo" target="_blank">Administrativo</a>
            </li>
            <li>
              <a href="http://192.168.2.65/intranetforma/modelos-e-checklist/aprovacoes/" title="Aprovações" target="_blank"> Aprovações</a>
            </li>
            <li>
             <a href="http://192.168.2.65/intranetforma/modelos-e-checklist/evtl/" title="EVTL" target="_blank">EVTL</a>
            </li>
            <li>
              <a href="http://192.168.2.65/intranetforma/modelos-e-checklist/financeiro/" title="Financeiro" target="_blank">Financeiro</a>
            </li>
            <li>
              <a href="http://192.168.2.65/intranetforma/modelos-e-checklist/projetos/" title="Projetos" target="_blank">Projetos</a>
            </li>
            <li>
              <a href="http://192.168.2.65/intranetforma/modelos-e-checklist/rh/" title="RH" target="_blank">RH</a>
           </li>
         </ul>
      	</li>
      	<li>      		
      		Treinamentos
          <ul>         
             <li>
              <a href="http://192.168.2.65/intranetforma/treinamentos/administrativo/" title="Administrativo" target="_blank">Administrativo</a>
            </li>
            <li>
              <a href="http://192.168.2.65/intranetforma/treinamentos/aprovacoes/" title="Aprovações" target="_blank"> Aprovações</a>
            </li>
            <li>
             <a href="http://192.168.2.65/intranetforma/treinamentos/geral/" title="EVTL" target="_blank">EVTL</a>
            </li>
            <li>
              <a href="http://192.168.2.65/intranetforma/treinamentos/financeiro/" title="Financeiro" target="_blank">Financeiro</a>
            </li>
            <li>
              <a href="http://192.168.2.65/intranetforma/treinamentos/financeiro/" title="Projetos" target="_blank">Projetos</a>
            </li>
            <li>
              <a href="http://192.168.2.65/intranetforma/treinamentos/rh/" title="RH" target="_blank">RH</a>
           </li>
         </ul>
      	</li>
        <li>      		
      		<a href="http://192.168.2.65/intranetforma/eventos/m%c3%aas/" target="_blank" title="Relações Institucionais">Relações Institucionais</a>
          <ul>
            <li>
              <a href="http://192.168.2.65/intranetforma/wp-content/uploads/2020/11/Solicita%C3%A7%C3%A3o-de-Demanda-Relacionamento-Institucional.docx" title="Solicitação de Demanda" target="_blank">Solicitação de Demanda</a>
            </li>
          </ul>
      	</li>
      	<li>      		
      		<a href="https://www.formaarquiteturalegal.com.br/admin/home/arquivos/faturamento.pdf" title="Faturamento" target="_blank">Faturamento</a>
      	</li>

      </ul>
   </div>
    </div>
	<?php

	?>
</body>
</html>