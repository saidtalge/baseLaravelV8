$(document).ready(function() {
    $('#dataTableFormat').DataTable({
        language: {
            processing:     "Procurando registro...",
            search:         "Procurar:",
            lengthMenu:    "Exibir _MENU_ registros",
            info:           "Exibindo _START_ a _END_ de _TOTAL_ registros",
            infoEmpty:      "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
            infoFiltered:   "(Filtro do Total de _MAX_ registros)",
            infoPostFix:    "",
            // loadingRecords: "Chargement en cours...",
            zeroRecords:    "Nenhum registro encontrado",
            // emptyTable:     "Aucune donnée disponible dans le tableau",
            paginate: {
                first:      "Primeiro",
                previous:   "Anterior",
                next:       "Próximo",
                last:       "Último"
            },
            aria: {
                sortAscending:  ": clique para ordenação crescente",
                sortDescending: ": clique para ordenação decrescente"
            }
        }
    });
} );