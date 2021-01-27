<?php
# Created by Mohammed Saad ALrmali.              #
# Twitter: z6_q |Date: ٢٥/٠١/٢١ |Time: ٠٧:٣٨ ص    #
# Github : github.com/DrTridz - Web : m-saad.net #

#Call Files Ar Or En an admin.blade.php
function getFolder(){
    return app() -> getLocale() == 'ar' ? 'css-rtl' : 'css';
}
function getStyle(){
    return app() -> getLocale() == 'ar' ? 'style-rtl' : 'style';
}
