<?php 
if(!isset($message)){
    $message = '該当件数';
}
?>

<div class="row">
    <?php $params = $this->Paginator->params(); ?>
    <div class="col-md-6 search-result">
        <?php
        $counter = $params['count'] ? $params['count'] : 0;
        echo $message.' ' . number_format($counter). ' 件';
        ?>
    </div>
    <div class="col-md-6 txtright">
        <?php if ($params['pageCount'] > 1) : ?>
        <ul class="pagination pagination-sm">
            <?php
            echo $this->Paginator->prev('前のページ', array('class' => 'prev', 'tag' => 'li', 'escape' => false), '<a onclick="return false;">前のページ</a>', array('class' => 'prev disabled', 'tag' => 'li', 'escape' => false));
            echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentClass' => 'active', 'currentTag' => 'a'));
            echo $this->Paginator->next('次のページ', array('class' => 'next', 'tag' => 'li', 'escape' => false), '<a onclick="return false;">次のページ</a>', array('class' => 'next disabled', 'tag' => 'li', 'escape' => false));
            ?>
        </ul>
        <?php endif; ?>
    </div>
</div>