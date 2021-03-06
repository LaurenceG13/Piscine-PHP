<html>
	<head>
		<meta charset="utf-8">
		<style>
			ul {
			    list-style-type: none;
			    margin: 0;
			    padding: 0;
			    overflow: hidden;
			    background-color: #333;
			}

			li {
			    float: left;
			}

			li a, .dropbtn {
			    display: inline-block;
			    color: white;
			    text-align: center;
			    padding: 14px 16px;
			    text-decoration: none;
			}

			li a:hover, .dropdown:hover .dropbtn {
			    background-color: red;
			}
			#admin{
				background-color: #cce6ff;
				color: #333;
				font-weight: bold;
				padding: 12px 16px;
			}

			li.dropdown {
			    display: inline-block;
			}

			.dropdown-content {
			    display: none;
			    position: absolute;
			    background-color: #f9f9f9;
			    min-width: 160px;
			    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			    z-index: 1;
			}

			.dropdown-content a {
			    color: black;
			    padding: 12px 16px;
			    text-decoration: none;
			    display: block;
			    text-align: left;
			}

			.dropdown-content a:hover {background-color: #f1f1f1}

			.dropdown:hover .dropdown-content {
			    display: block;
			}
		</style>
	</head>
	<body>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li class="dropdown">
				<a href="javascript:void(0)" class="dropbtn">Catégories</a>
				<div class="dropdown-content">
					<a href="categories/all.php">Tout les produits</a>
					<a href="categories/fruits.php">Fruits</a>
					<a href="categories/legumes.php">Légumes</a>
				</div>
			</li>
			<li class="dropdown">
				<a href="javascript:void(0)" class="dropbtn">Compte</a>
				<div class="dropdown-content">
					<a href="users/login.html">Connexion</a>
					<a href="users/logout.php">Déconnexion</a>
					<a href="users/create.html">Créer un compte</a>
					<a href="users/delete.html">Supprimer mon compte</a>
				</div>
			</li>
			<li><a href="panier.php">Panier</a></li>
		</ul>
	</body>
</html>
