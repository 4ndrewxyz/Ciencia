document.addEventListener('DOMContentLoaded', function() {
    var counters = document.querySelectorAll('.timer');
    
    counters.forEach(function(counter) {
        var target = parseInt(counter.getAttribute('data-count'));
        var duration = 2000; // Duration in milliseconds
        var step = Math.ceil(target / duration);
        var count = 0;
        var timer = setInterval(function() {
            count += step;
            counter.textContent = count;
            if (count >= target) {
                counter.textContent = target;
                clearInterval(timer);
            }
        }, 1);
    });
});