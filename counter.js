// Simple visitor counter that works with GitHub Pages
let visitorCount = 0;

// Load existing count from localStorage
function loadCount() {
    const stored = localStorage.getItem('studiosoberhome_visitor_count');
    if (stored) {
        visitorCount = parseInt(stored);
    }
}

// Save count to localStorage
function saveCount() {
    localStorage.setItem('studiosoberhome_visitor_count', visitorCount.toString());
}

// Increment and save count
function incrementCount() {
    visitorCount++;
    saveCount();
    return visitorCount;
}

// Get current count
function getCount() {
    return visitorCount;
}

// Initialize counter
loadCount();
