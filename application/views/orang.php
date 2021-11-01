<table class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Twitter</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
			<?php 
				foreach($daftar_orang as $baris) {
					?><?php
					<tr>
				<th scope="row"><?php echo $baris->id ?></th>
					<td>?php echo $baris->id ?</td>
					<td>?php echo $baris->id ?</td>
					</td>
					  <button class="btn btn-dark"type"submit">Ubah</button>
					  <button class="btn btn-dark"type"submit">Hapus</button>
					  </td>
					</tr>
				<?php

				}

			?>
          <tr>
            <th scope="row">1</th>
            <td>MAKI</td>
            <td>Tōhoku</td>
            <td>@MAKI</td>
            <th>
              <button class="btn btn-dark"type"submit">Ubah</button>
              <button class="btn btn-dark"type"submit">Hapus</button>
			  			</td>
			  		</tr>
			  	</tbody>
			</table>
			
			  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
			<form action="index.php/Welcome/TambahOrang" method="post">
            <div class="modal-body">
              <input type="text" Name="nama" class="form-control">
              <br>
              <input type="text" Name="alamat" class="form-control"> 
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </from>
          </div>
        </div>
      </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
</html>
		  