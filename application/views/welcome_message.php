<?php $this->load->view("_partials/head.php") ?>

<body>
</body>

<!-- Navigation -->
<?php $this->load->view("_partials/navigation.php") ?>

<div class="container">
    <div class="row">
      	<!-- Blog Entries Column -->
      	<div class="col-md-8">

			<h1 class="my-4">Seminar 
			<small>Jaminan Fidusia paska Putusan MK</small>
			</h1>

	

			<!-- Blog Post -->
			<div class="card mb-4">
				<img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
				<div class="card-body">
					<h2 class="card-title">Post Title</h2>
					<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
					<a href="#" class="btn btn-primary">Read More &rarr;</a>
				</div>
				<div class="card-footer text-muted">
					Posted on January 1, 2017 by
					<a href="#">Start Bootstrap</a>
				</div>
			</div>
			
		</div>

		<?php $this->load->view("_partials/sidebar.php") ?>
	</div>
</div>
		

<?php $this->load->view("_partials/footer.php") ?>
</html>