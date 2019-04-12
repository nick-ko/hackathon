<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Ecole</title>


    <!-- Our Custom CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" id="bootstrap-css">
    <link href="assets/css/style.css" rel="stylesheet" id="bootstrap-css">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

<div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Ecole NaN</h3>
            <strong>EN</strong>
        </div>

        <ul class="list-unstyled components">
            <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fas fa-home"></i>
                    Acceuil
                </a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="#">Home 1</a>
                    </li>
                    <li>
                        <a href="#">Home 2</a>
                    </li>
                    <li>
                        <a href="#">Home 3</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="course">
                    <i class="fas fa-briefcase"></i>
                    Cours
                </a>

                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fas fa-copy"></i>
                    Pages
                </a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="#">Page 1</a>
                    </li>
                    <li>
                        <a href="#">Page 2</a>
                    </li>
                    <li>
                        <a href="#">Page 3</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-image"></i>
                    Portfolio
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-question"></i>
                    FAQ
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-paper-plane"></i>
                    Contact
                </a>
            </li>
        </ul>

    </nav>

    <!-- Page Content  -->
    <div id="content">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fas fa-align-left"></i>
                    <span></span>
                </button>
                <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-align-justify"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Page</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Page</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Page</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Page</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <h2>Liste des cours</h2>
        <br>
        <button class="btn btn-primary" data-toggle="modal" data-target="#myModalAdd">Ajouter</button>
        <br><br>
        <div class="well">
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Cours</th>
                <th>Niveau</th>
                <th>Image</th>
                <th >Action</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($cours as $cour) :?>
                <tr>
                    <td><?=$cour['id']?></td>
                    <td><?=$cour['titre']?></td>
                    <td><?=$cour['niveau']?></td>
                    <td><img src="<?=$cour['image']?>" style="height: 50px; width: 50px;"></td>
                    <td>
                        <a href="edit-<?=$cour['id']?>"><button type="button" class="btn btn-primary btn-xs">editer</button></a>
                        <a href="dashboard-<?=$cour['id']?>"><button type="button" class="btn btn-danger btn-xs">supprimé</button></a>
                    </td>
                </tr>
            <?php endforeach ?>
            </tbody>
        </table>
    </div>
    </div>
</div>

<!-- Add New Product Modal-->
<form action="course" method="post">
    <div class="modal fade" id="myModalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ajouter Un Cours </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" name="cour" class="form-control" placeholder="Cours" required>
                    </div>
                    <div class="form-group">
                        <input type="file" name="image" class="form-control"  required>
                    </div>
                    <div class="form-group" >
                        <select  class="form-control" name="niveau">
                            <option>Selectionnez le niveau</option>
                            <?php foreach ($niveau as $niv) :?>
                                <option value="<?=$niv['libelle']?>" ><?=$niv['libelle']?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-primary">Valider</button>
                </div>
            </div>
        </div>
    </div>
</form>

<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });
</script>
</body>

</html>