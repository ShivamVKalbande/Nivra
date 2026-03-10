<footer>
  <img src="./images/logo-transparent.png" height="70" />
  <p>&copy; 2026 Viksit Trade. All Rights Reserved.</p>
</footer>

<script>
  document.querySelectorAll(".product-image").forEach(box => {
    const img = box.querySelector("img");
    box.style.setProperty("--img", `url('${img.src}')`);
  });
</script>

</body>
</html>
