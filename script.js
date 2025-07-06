
        async function fetchJoke() {
            try {
                let response = await fetch('https://official-joke-api.appspot.com/random_joke');
                let data = await response.json();
                let joke = `${data.setup} - ${data.punchline}`;
                document.getElementById('news').textContent = joke;
            } catch (error) {
                document.getElementById('news').textContent = 'Failed to load joke';
            }
        }
        fetchJoke();
        setInterval(fetchJoke, 20000); // Refresh joke every 20 seconds
  
