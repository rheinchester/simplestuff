
<?php
include_once '../assets/database/Article.php';
include_once '../assets/database/Category.php';
// include_once '../header.php';
include_once ('../assets/database/Admin.php');
include_once ('../assets/database/session.php');
include_once ('../assets/database/function.php'); 
	// if(!$session->is_logged_in()) redirect('logout.php');
	$msg = ""; 
	if (isset($_GET['id']) && isset($_GET['opt']))  {
		$article = Article::find($_GET['id']);
		if ($_GET['opt'] == 0 && $article) {
			$article->delete();
			redirect('all_articles.php');
		}
	}
include_once 'Admin_header.php';
?>

<div id="header">
    </div><!-- #header -->
    
    <div id="content">
    </div><!-- #content -->
    
    <div id="footer">
    </div><!-- #footer -->
    
  </div><!-- #wrapper -->
					
			
  		<div class="container">
			<div class='row'>
				<article class='col col-lg-9 col-md-8 col-sm-9'>
					<div class='row'>
						<?php echo $msg; ?>
					</div>
					<div class='row'>
						<h3>Article List</h3>
					</div>					
					<section class='row'>
	<!-- protected $article_id;
	public $cat_id;
	public $headline;
	public $readers;
	public $subscribers;
	public $topic;
	public $image; -->
	<!-- public content -->

<?php
	$articles = Article::all();
	$table = "<table class='table table-hover table-bordered table-striped'>
				<thead>
					<tr>
						<th>S/No.</th>
						<th>topic</th>
						<th>readers</th>
						<th>subscribers</th>
						<th>image</th>
						<th>Category</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
				</thead>
				<tbody>";
				$i = 1;
	foreach ($articles as $article) {
		$category = Category::find($article->cat_id);
		$table .="<tr>
					<td>$i</td>
					<td>{$article->topic}</td>
					<td>{$article->readers}</td>
					<td>{$article->subscribers}</td>
					<td>{$article->image}</td>
					<td value ='{$article->cat_id}'>{$category->name}</td>
					<td><a class='btn btn-info' href='Edit_article.php?id={$article->getArticleId()}'>Edit</a></td>
					<td><a class='btn btn-danger' href='all_articles.php?id={$article->getArticleId()}&opt=0'>Delete</a></td>
				</tr>";
				$i++;
	}
	$table.="</tbody></table>";
	echo $table;
?>
					</section>	
				</article>
			</div>
		</div>
		<script type="text/javascript" src="../js/jquery.js"></script>
		<script type="text/javascript" src="../js/bootstrap.min.js"></script>
		<div id="wrapper">
	<div id="header">
    </div><!-- #header -->
    
    <div id="content">
    </div><!-- #content -->
    
    <div id="footer">
    </div><!-- #footer -->
    
  </div><!-- #wrapper -->
	</body>
</html>

