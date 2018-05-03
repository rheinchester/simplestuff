
<?php 
  include_once '../assets/database/Article.php';
  include_once '../assets/database/Category.php';  
  include_once ('../assets/database/Admin.php');
  include_once ('../assets/database/session.php');
  include_once ('../assets/database/function.php'); 
    // if(!$session->is_logged_in()) redirect('logout.php');
    $msg = ""; 
    if (isset($_GET['id']) && isset($_GET['opt']))  {
        $article = Article::find($_GET['id']);
        if ($_GET['opt'] == 0 && $article) {
            $article->delete();
            redirect('All_articles1.php');
        }
    }
    
include_once 'dashboardHeader.php';
?>    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            

            <ul class="nav">
                <li class="active">
                    <a href="dashboard.html">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Articles</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <!-- <i class="fa fa-dashboard"></i> -->
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="logout.php">
                               Log out
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                        <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header ">
                                <h4 class="title">Striped Table with Hover</h4>
                                <a class='btn btn-success col-md-offset-10' href='add_article.php'>Add</a>
                                <p class="category">Here is a subtitle for this table</p>
                            </div>
                            <?php
                            $articles = Article::all();
                            $table = "
                            <div class='content table-responsive table-full-width'>
                                <table class='table table-hover table-striped'>
                                    <thead>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Salary</th>
                                        <th>Country</th>
                                        <th>City</th>
                                    </thead>
                                    <tbody>";
                                    $i = 1;
                            foreach ($articles as $article) {
                                $category = Category::find($article->cat_id);
                            $table .= "
                            <tr>
                                <td>$i</td>
                                <td>{$article->topic}</td>
                                <td>{$article->readers}</td>
                                <td>{$article->subscribers}</td>
                                <td>{$article->image}</td>
                                <td value ='{$article->cat_id}'>{$category->name}</td>
                                <td>
                                    <a class='btn btn-info' href='Edit_article.php?id={$article->getArticleId()}'>Edit</a>
                                </td>
                                <td>
                                    <a class='btn btn-success' href='view_article.php?id={$article->getArticleId()}'>view</a>
                                </td>
                                <td>
                                    <a class='btn btn-danger' href='all_articles.php?id={$article->getArticleId()}&opt=0'>Delete</a>
                                    </td>
                                </td>
                            </tr>";
                            $i++;
                            }
                            $table.="</tbody></table>";
                            echo $table;
                              ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
include_once 'dashboardFooter.php';
  ?>
