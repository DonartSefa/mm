<?php include_once 'header.php'; ?>

<section class="vh-100" style="background-color: #000000;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-7">
        <div class="card shadow" style="border-radius: 25px; background-color: #121212; border: 2px solid #E50914;">
          <div class="card-body p-5">
            <h2 class="text-center fw-bold mb-5" style="color: #E50914; font-family: 'Georgia', serif;">Add a Movie</h2>

            <form method="POST" action="addMovieLogic.php" class="mx-3 mx-md-4" autocomplete="off">

              <div class="mb-4">
                <label for="movie_name" class="form-label fw-semibold" style="color: #FFFFFF;">Movie Name</label>
                <input type="text" id="movie_name" name="movie_name" class="form-control border-0 shadow-sm" placeholder="Enter movie name" style="background: #1F1F1F; color: #CCCCCC;" required>
              </div>

              <div class="mb-4">
                <label for="movie_desc" class="form-label fw-semibold" style="color: #FFFFFF;">Description</label>
                <textarea id="movie_desc" name="movie_desc" class="form-control border-0 shadow-sm" rows="3" placeholder="Brief movie description" style="background: #1F1F1F; color: #CCCCCC;" required></textarea>
              </div>

              <div class="row g-3 mb-4">
                <div class="col-md-4">
                  <label for="movie_rating" class="form-label fw-semibold" style="color: #FFFFFF;">Rating</label>
                  <select id="movie_rating" name="movie_rating" class="form-select border-0 shadow-sm" style="background: #1F1F1F; color: #CCCCCC;" required>
                    <?php for ($i = 1; $i <= 10; $i++): ?>
                      <option value="<?= $i ?>"><?= $i ?></option>
                    <?php endfor; ?>
                  </select>
                </div>
                <div class="col-md-4">
                  <label for="movie_year" class="form-label fw-semibold" style="color: #FFFFFF;">Year</label>
                  <input type="number" id="movie_year" name="movie_year" class="form-control border-0 shadow-sm" placeholder="e.g. 2023" min="1888" max="<?= date('Y') ?>" style="background: #1F1F1F; color: #CCCCCC;" required>
                </div>
                <div class="col-md-4">
                  <label for="movie_length" class="form-label fw-semibold" style="color: #FFFFFF;">Length (min)</label>
                  <input type="number" id="movie_length" name="movie_length" class="form-control border-0 shadow-sm" placeholder="Duration" min="1" style="background: #1F1F1F; color: #CCCCCC;" required>
                </div>
              </div>

              <div class="mb-4">
                <label for="movie_genre" class="form-label fw-semibold" style="color: #FFFFFF;">Genre</label>
                <select id="movie_genre" name="movie_genre" class="form-select border-0 shadow-sm" style="background: #1F1F1F; color: #CCCCCC;" required>
                  <option value="Action">Action</option>
                  <option value="Comedy">Comedy</option>
                  <option value="Drama">Drama</option>
                  <option value="Thriller">Thriller</option>
                  <option value="Horror">Horror</option>
                  <option value="Romance">Romance</option>
                  <option value="Sci-fi">Sci-Fi</option>
                  <option value="Fantasy">Fantasy</option>
                  <option value="Documentary">Documentary</option>
                  <option value="Animation">Animation</option>
                </select>
              </div>

              <div class="mb-4">
                <label for="movie_trailer" class="form-label fw-semibold" style="color: #FFFFFF;">Trailer URL</label>
                <input type="url" id="movie_trailer" name="movie_trailer" class="form-control border-0 shadow-sm" placeholder="https://example.com/trailer" style="background: #1F1F1F; color: #CCCCCC;">
              </div>

              <div class="mb-4">
                <label for="movie_readmore" class="form-label fw-semibold" style="color: #FFFFFF;">Read More URL</label>
                <input type="url" id="movie_readmore" name="movie_readmore" class="form-control border-0 shadow-sm" placeholder="https://example.com/details" style="background: #1F1F1F; color: #CCCCCC;">
              </div>

              <div class="mb-4">
                <label for="movie_image" class="form-label fw-semibold" style="color: #FFFFFF;">Image URL</label>
                <input type="url" id="movie_image" name="movie_image" class="form-control border-0 shadow-sm" placeholder="https://example.com/image.jpg" style="background: #1F1F1F; color: #CCCCCC;">
              </div>

              <div class="d-flex justify-content-center">
                <button type="submit" name="submit" class="btn btn-lg px-5 fw-bold" style="background-color: #E50914; color: #FFFFFF; border-radius: 50px; box-shadow: 0 4px 10px rgba(229, 9, 20, 0.7); transition: background-color 0.3s ease;">
                  Submit
                </button>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  input.form-control:focus, select.form-select:focus, textarea.form-control:focus {
    box-shadow: 0 0 8px 2px #E50914;
    border-color: #E50914;
    outline: none;
    background-color: #121212;
    color: #FFFFFF;
  }

  button.btn-lg:hover {
    background-color: #B0060F;
    box-shadow: 0 6px 15px rgba(229, 9, 20, 0.9);
  }
</style>

<?php include_once 'footer.php'; ?>
