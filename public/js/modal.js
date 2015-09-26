(function($){

    $.jModal = function(options) {

        var jModal = {

            $modal : {},

            options : $.extend({
                modal:'#modal',
                attributes:{}
            },options),

            init : function(){
                this.$modal = $(options.modal);
            },

            openModal : function(){
                this.$modal.modal('show');
            },

            closeModal : function(){

            }

        };
        return {
            init: jModal.init,
            open: jModal.openModal,
            close: jModal.closeModal
        };
    };
})(jQuery);