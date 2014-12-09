<style type="text/css">
    .top-nav{
        display: block;
        text-align: center;
        margin-bottom: 10px;
        background-color: ;
        padding: 8px;
    }

    .top-nav ul{
        display: inline;
        width: 70%;
    }

    .top-nav ul li{
        display: inline-block;
    }

    .top-nav ul li a{
        display: inline-block;
        padding:10px 15px;
        text-transform: capitalize;
        background-color: #ffffff;
        font-size: 20px;
        color: #111111;
        margin-right: 5px;
        margin-left: 5px;
        border-right:1px solid #f6a828;
    }

    .top-nav ul li:last-child a{
        border-right: none;
    }

    .top-nav a:hover{
        background-color: #f6a828;
        color: #ffffff;
    }
</style>

<nav class="top-nav">
    <ul>
        <?php
        foreach($PAGES as $link){
            if($link == $page){ $class = 'current' ; } else{ $class = '' ;}
            echo "<li><a href='./".ucfirst($link)."' class='$class'><span></span> <label>$link</label></a></li>" ;
        }
        ?>
    </ul>
</nav>