    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"></h1>
      </div>

			<div class="col-md-12">
					<?php	if(isset($games)): ?>
						<form action="<?= base_url() ?>games/update/<?=$games['id']?>" method="post">
					<?php	else: ?>
						<form action="<?= base_url() ?>games/store" method="post">
					<?php	endif; ?>

					<div class="col-md-6">
						<div class="form-group">
							<label for="name">Name</label>
							<input type="text" class="form-control" name="name" id="name" placeholder="Name" required value="<?= isset($games) ? $games['name'] : ''?>">
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="description">Description</label>
							<textarea name="description" id="description" rows="5" class="form-control" required ><?= isset($games) ? $games['description'] : ''?></textarea>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="price">Price</label>
							<input type="text" class="form-control" name="price" id="price" placeholder="Price"  required value="<?= isset($games) ? $games['price'] : ''?>">
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="developer">Developer</label>
							<input type="text" class="form-control" name="developer" id="developer" placeholder="Developer"  required value="<?= isset($games) ? $games['developer'] : ''?>">
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="release_date">Release Date</label>
							<input type="text" class="form-control" name="release_date" id="release_date" placeholder="Release Date"  required value="<?= isset($games) ? $games['release_date'] : ''?>">
						</div>
					</div>

					<div class="col-md-6">
							<button type="submit" class="btn btn-success btn-xs"><i class="fas fa-check"></i> Save</button>
							<a href=" <?= base_url() ?>games" class="btn btn-danger btn-xs"><i class="fas fa-times"></i> Cancel</a>
						</div>
					</div>
				</form>
			</div>

    </main>
  </div>
</div>
