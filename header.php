<style>
    #search{
        border: 0; 
    }
    #bar{
        border-radius: 10px;
    }
    #h-bar{
        justify-content: space-between;
    }
    #profil{
        width: 40px;
        height: 40px;
        border-radius: 50%;
        border: px solid #fff;
    }
    a[alt^='el_a']{
        text-decoration: none;
        color: black;
        font-size: 130%;
    }
    #person{
        background-color: rgb(238, 238, 238);
        border-radius: 20px;
    }
    #bouton{
        background-color: blue;
    }
    .b1{
        text-decoration: none;
        border: none;
        background-color: unset;
    }
</style>
<section class="container-fluid px-5 mx-auto header">
    <div class="row ml-4 d-flex justify-content-between" id="h-bar">
        <div class="col-lg-4 col-md-4 col-12 border px-3 mt-3" id="bar">
            <div class="row">
                <div class="col-4">
                    <form action="#" method="post">
                        <input type="text" size="30%" name="search" id="search" placeholder="Rechercher un club de HandBall" class="fa fa-search py-2">
                    </form>
                </div>
                <div class="col-8 text-right">
                    <span><i class="fa fa-search py-2 text-end"></i></span>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-4 col-12 text-lg-end mt-3">
            <div class="row">
                <div class="col-3">
                    <button class="b1"><a href="offre.php" alt='el_a'>Offre</a></button>
                </div>
                <div class="col-3">
                    <button class="b1"><a href="tarifs.php" alt='el_a'>Tarifs</a></button>
                </div>
                <div class="col-3">
                    <button class="b1"><a href="connexion.php" alt='el_a'>Se connecter</a></button>
                </div>
                <div class="col-3">
                    <button class="b1"><a href="inscription1.php" alt='el_a'>S'inscrire</a></button>
                </div>
            </div>
        </div>
    </div>
    <hr width="100%">
</section>