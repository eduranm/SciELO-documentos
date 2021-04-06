class_scielo = {
    pag: 'inicio',
    titulos: {
        'inicio': 'Información SciELO-México',
        'admision_inmediata': 'Evaluación, Admisión Y Permanencia de las revistas en la coleeción SciELO-México',
        'admision': '',
        'evaluacion': '',
        'control': '',
        'envio': '',
        'informes': 'Informes de las revistas en SciELO-México',
        'certificacion': 'Certificación y empresas de servicios de marcación textos SciELO publishing schema',
        'empresas': 'Certificación y empresas de servicios de marcación textos SciELO publishing schema',
        'modalidades': 'Modalidades de la publicación electrónica',
        'guia': 'Modalidades de la publicación electrónica',
        'manuales': 'Manuales y guías multimedia',
        'criterios': 'Criterios de selección',
    },
    subtitulos: {
        'inicio': 'Breve información sobre SciELO-México',
        'admision_inmediata': 'Admisión inmediata de revistas en la colección SciELO-México',
        'admision': 'Evaluación y admisión de revistas en la colección SciELO-México',
        'evaluacion': 'Evaluación y admisión de revistas en la colección SciELO-México',
        'control': 'Control y seguimiento de la revista para su permanencia en SciELO-México',
        'envio': 'Información referente al envío de revistas y archivos electrónicos para la inclusión de publicaciones en SciELO-México',
        'informes': '',
        'certificacion': 'Certificación de servicios de marcación de textos de acuerdo con SciELO Publishing Schema',
        'empresas': 'Lista de empresas y profesionistas certificados',
        'modalidades': 'Publicación CONTINUA, AHEAD OF PRINT y PRE-PRINT',
        'guia': 'Guía para la publicación de artículos en revistas indizadas en SciELO en la modalidad de Publicación Continua',
        'manuales': '',
        'criterios': '',
    },
    paginas:{
        'inicio' : 'scielo/inicio',
        'admision_inmediata': 'scielo/admision_inmediata',
        'admision': 'scielo/admision',
        'evaluacion': 'scielo/evaluacion',
        'control': 'scielo/control',
        'envio': 'scielo/envio',
        'informes': 'scielo/informes',
        'certificacion': '',
        'empresas': 'scielo/empresas',
        'modalidades': '',
        'guia': '',
        'manuales': 'scielo/manuales',
        'cotizador': 'http://www.scielo.org.mx/avaliacao/cotizador.html',
        'criterios': 'scielo/criterios',
    },
    archivos:{
        'inicio' : '',
        'admision_inmediata': '',
        'admision': '',
        'evaluacion': '',
        'control': '',
        'envio': '',
        'informes': '',
        'certificacion': 'http://www.scielo.org.mx/avaliacao/normas/CertificacionSciELOMX2_0.pdf',
        'empresas': '',
        'modalidades': 'http://www.scielo.org.mx/avaliacao/Guia_PRE_PRINT_AHEAD_OF_PRINT_ROLLING_PASS_PUBLICACION_CONTINUA.pdf',
        'guia': 'http://www.scielo.org.mx/avaliacao/GuiaPublicacionContinua_ES.pdf',
        'manuales': '',
        'criterios': '',
    },
    ready: function(){
        class_scielo.titulos['evaluacion'] = class_scielo.titulos['admision_inmediata'];
        class_scielo.titulos['control'] = class_scielo.titulos['admision_inmediata'];
        class_scielo.titulos['envio'] = class_scielo.titulos['admision_inmediata'];
        class_scielo.titulos['admision'] = class_scielo.titulos['admision_inmediata'];
        class_scielo.render();
        class_scielo.control();
    },
    control: function(){        
        $('.link_menu').click( function(e) {
            e.preventDefault();
            class_scielo.pag = this.id;
            if(this.target =='_blank')
                window.open(class_scielo.paginas[class_scielo.pag], '_blank');
            else
                class_scielo.render();
        });
        $(window).resize(function(e) {
            if( $( window ).width() > 992 )
                $('.nav-right').css('display','block');
            else
                $('.nav-right').css('display','none');
        });
    },
    render: function(){
        $('li span.titulo').html(class_scielo.titulos[class_scielo.pag]);
        $('#titulo').html(class_scielo.titulos[class_scielo.pag]);
        $('#subtitulo').html(class_scielo.subtitulos[class_scielo.pag]);
        
        if(class_scielo.paginas[class_scielo.pag] !== ''){
            $('#contenido').show();
            $('#contenido').load(class_scielo.paginas[class_scielo.pag],function(){
                class_scielo.accordion();
                $('body, html').animate({
			scrollTop: '0px'
		}, 300);
            });
        }else{
            $('#contenido').html('');
            $('#contenido').hide();
        }
        
        if(class_scielo.subtitulos[class_scielo.pag] === '')
            $('#card_subtitulo').hide();
        else
            $('#card_subtitulo').show();
        
        if(class_scielo.archivos[class_scielo.pag] === '')
            $('#archivo').hide();
        else{
            $('#archivo').show();
            $('#archivo').attr('data',class_scielo.archivos[class_scielo.pag]);
            $('body, html').animate({
			scrollTop: '0px'
		}, 300);
        }
    },
    accordion: function(){
        $( "#color-accordion" ).accordion({
                heightStyle: "content",
                icons: icons
            });
    }
}

$(class_scielo.ready);