<div>
    <div class="footer-menu">
      <div class="my-container">
        <div class="footer-menu-links">
          <div>
            <h5>dc comics</h5>
            <ul>
              <li>Characters</li>
              <li>Comics</li>
              <li>Movies</li>
              <li>TV</li>
              <li>Games</li>
              <li>Videos</li>
              <li>News</li>
            </ul>
            <h5>shop</h5>
            <ul>
                <li>Shop DC</li>
                <li>Shop DC Collectibles</li>
            </ul>
          </div>
          <div>
            <h5>dc</h5>
            <ul>
              <a v-for="(link, index) in dcLinks" :key="index" :href="link.url"
                ><li>{{ link.name }}</li></a
              >
            </ul>
          </div>
          <div>
            <h5>sites</h5>
            <ul>
              <a
                v-for="(link, index) in sitesLinks"
                :key="index"
                :href="link.url"
                ><li>{{ link.name }}</li></a
              >
            </ul>
          </div>
        </div>
        <div class="footer-menu-logo">
          <img src="../assets/img/dc-logo-bg.png" alt="dc logo" />
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="my-container">
        <div class="footer-button">
          <a href="#">sign-up now!</a>
        </div>
        <div class="footer-social">
          <a href="#">follow us</a>
          <a href="#"
            ><img src="../assets/img/footer-facebook.png" alt="facebook logo" />
          </a>
          <a href="#"
            ><img src="../assets/img/footer-twitter.png" alt="twitter logo" />
          </a>
          <a href="#"
            ><img src="../assets/img/footer-youtube.png" alt="yootube logo" />
          </a>
          <a href="#"
            ><img src="../assets/img/footer-pinterest.png" alt="pinterest logo"
          /></a>
          <a href="#"
            ><img src="../assets/img/footer-periscope.png" alt="periscope logo"
          /></a>
        </div>
      </div>
    </div>
  </div>