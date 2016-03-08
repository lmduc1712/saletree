<?php
switch (AuthComponent::user('type')) {
    case 1:
        echo $this->element('top_admin');
        break;
    case 2:
        echo $this->element('top_sale_leader');
        break;
    case 3:
        echo $this->element('top_sale');
        break;
    case 4:
        echo $this->element('top_tro_giang');
        break;
    case 5:
        echo $this->element('top_quan_ly_hoc_vien');
        break;
    case 6:
        echo $this->element('top_ke_toan');
        break;
    case 7:
        echo $this->element('top_marketing');
        break;
}
?>