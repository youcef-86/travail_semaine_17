<body>
    <h1>Liste des produits</h1>

    <div class="row">
        <div class="col-12">    
            <?php 
                foreach ($liste_produits as $row) 
                {
                    echo"<p>".$row->pro_id."</p>";
                    echo"<p>".$row->pro_ref."</p>";
                    echo"<p>".$row->pro_libelle."</p>";
                    echo"<p>".$row->pro_libelle."</p>";
                    echo"<p>".$row->pro_description."</p>";     
                }
            ?>
        </div>
    </div>