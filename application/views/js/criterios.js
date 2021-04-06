class_criterios = {
    tr_tabla:   '<tr>' +
                    '<td><num></td>' +
                    '<td style="width:90%"><nombre></td>' +                    
                    '<td><descripcion></td>' +
                '</tr>',
    div_tabla:  '<table id="tabla_criterios" class="display responsive nowrap" style="width:100%">' +
                    '<thead>' +
                        '<tr>' +
                            '<th class="all">Num</th>' +
                            '<th class="all">Criterio</th>' +
                            '<th class="none">Descripcion</th>' +
                        '</tr>' +
                    '</thead>' +
                    '<tbody id="body_tabla">' +
                    '</tbody>' +
                '</table>',
    ready: function(){
        $.when(class_utils.getResource('http://digitalab-ssie.unam.mx/restserver/table/tc_sc_criterio'))
        .then(function(res){
            $('#div_tabla').html(class_criterios.div_tabla);
            var html_body = '';
            $.each(res,function(i,val){
                html_body += class_criterios.tr_tabla.replace('<num>',val.id_criterio)
                                                        .replace('<nombre>',val.nombre)
                                                        .replace('<descripcion>',val.descripcion);
            });
            $('#body_tabla').html(html_body);
            var extra={
                deferRender: true,
                columnDefs: [
                    {
                        render: function (data, type, full, meta) {
                            return "<div class='tabla-descripcion'>" + data + "</div>";
                        },
                        targets: [0,1,2]
                    }
                ]                
            };
            class_utils.setTabla('tabla_criterios',extra);
        });
        
    }
}

$(class_criterios.ready);


