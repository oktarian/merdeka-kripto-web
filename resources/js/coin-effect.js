// In a separate JS file (e.g., app.js or a new coins.js)

document.addEventListener('DOMContentLoaded', () => {
    const coinContainer = document.createElement('div');
    coinContainer.id = 'coin-rain-container';
    document.body.appendChild(coinContainer);

    // Add CSS for coinContainer in your custom.css
    /*
    #coin-rain-container {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none; // Allows interaction with elements beneath
        overflow: hidden;
        z-index: 100; // Make sure it's above other content but below popups
    }
    */

    function createCoin() {
        const coin = document.createElement('img');
        coin.src = '{{ asset('images/coin.png') }}'; // You'll need a coin image
        coin.classList.add('falling-coin');
        coin.style.left = `${Math.random() * 100}vw`; // Random horizontal position
        coin.style.animationDelay = `${Math.random() * 5}s`; // Random start time
        coin.style.animationDuration = `${5 + Math.random() * 5}s`; // Random duration

        coinContainer.appendChild(coin);

        // Remove coin after animation to prevent performance issues
        coin.addEventListener('animationend', () => {
            coin.remove();
            // Optionally, create a new coin to keep the rain going
            // createCoin();
        });
    }

    // Spawn a certain number of coins initially
    for (let i = 0; i < 50; i++) {
        createCoin();
    }

    // Or, continuously spawn coins
    // setInterval(createCoin, 200); // Create a new coin every 200ms
});