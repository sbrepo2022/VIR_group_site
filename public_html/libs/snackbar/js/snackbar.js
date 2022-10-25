(function( $ ){
    $.fn.showSnackbar = function(settings) {
        new Promise((resolve) => {
            let rand_ind = Math.floor(Math.random() * 10000);
            let bg_color = '#000000bb';
            switch(settings.type) {
                case 'danger':
                    bg_color = '#dc3545cc';
                    break;

                case 'warning':
                    bg_color = '#ffc107cc';
                    break;

                case 'info':
                    bg_color = '#17a2b8cc';
                    break;

                case 'success':
                    bg_color = '#28a745cc';
                    break;

                case 'secondary':
                    bg_color = '#6c757dcc';
                    break;

                case 'primary':
                    bg_color = '#007bffcc';
                    break;

                default:
                    bg_color = '#000000cc';
            }

            this.find('.snackbar-lib-wrapper').remove();
            this.append(`
                <div class="snackbar-lib-wrapper" data-index="${ rand_ind }">
                    <div class="snackbar-lib"  style="background-color: ${ bg_color };">
                        ${ settings.text }
                    </div>
                </div>
            `);
            setTimeout(() => resolve(rand_ind), 10);
        })
        .then((index) => {
            return new Promise((resolve) => {
                this.find(`[data-index="${index}"] .snackbar-lib`).addClass('active');
                setTimeout(() => resolve(index), settings.show_time);
            });
        })
        .then((index) => {
            return new Promise((resolve) => {
                this.find(`[data-index="${index}"] .snackbar-lib`).removeClass('active');
                setTimeout(() => resolve(index), 200);
            });
        })
        .then((index) => {
            this.find(`[data-index="${index}"].snackbar-lib-wrapper`).remove();
        });
    };
})( jQuery );
