    $(document).ready(function(){
            $('.view-button').click(function(){
                var func = $(this).val();
                var tabPane = $(this).closest('.tab-pane');
                $.ajax({
                    url: "<?php echo base_url('mts/'); ?>"+func,
                    
                    success: function(data){
                        $(tabPane).html(data);
                        
                    }
                });
            });
        });