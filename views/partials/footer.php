<script>
    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('/assets/service-worker.js')
            .then(reg => console.log('SW enregistré !', reg))
            .catch(err => console.error('SW erreur :', err));
    }
</script>
</body>

</html>