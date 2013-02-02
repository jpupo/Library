<ul>
<li>
<?php
echo $this->Html->link( __('Show all Users'),
array('controller' => 'users','action'=> 'index'
)
);
?>
</li>

<li>
<?php
echo $this->Html->link( __('Show all Books'),
array('controller' => 'books','action'=> 'index'
)
);
?>
</li>


<li>
<?php
echo $this->Html->link( __('Show all Categories'),
array('controller' => 'categories','action'=> 'index'
)
);
?>
</li>

</ul>