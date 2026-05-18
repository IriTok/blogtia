import 'select2/dist/css/select2.min.css';
import 'select2-bootstrap4-theme/dist/select2-bootstrap4.min.css';

import $ from 'jquery';
import select2 from 'select2';
import bsCustomFileInput from 'bs-custom-file-input';

select2($);

$(document).ready(function() {
    $('.select2').select2({
        theme: 'bootstrap4'
    });

    bsCustomFileInput.init();
});