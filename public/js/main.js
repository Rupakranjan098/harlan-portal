// Mobile Menu Toggle
const mobileToggle = document.querySelector('.nav-mobile-toggle');
const navLinks = document.querySelector('.nav-links');

if (mobileToggle) {
    mobileToggle.addEventListener('click', () => {
        navLinks.classList.toggle('active');
        const icon = mobileToggle.querySelector('i');
        if (navLinks.classList.contains('active')) {
            icon.classList.remove('fa-bars');
            icon.classList.add('fa-times');
        } else {
            icon.classList.remove('fa-times');
            icon.classList.add('fa-bars');
        }
    });
}

// Counter Animation
const counters = document.querySelectorAll('.counter');
const speed = 200;

const startCounter = (counter) => {
    const target = counter.getAttribute('data-target');
    const numericTarget = parseFloat(target.replace(/[^\d.]/g, ''));
    const suffix = target.replace(/[\d.,]/g, '');
    const prefix = target.startsWith('$') ? '$' : '';
    
    let count = 0;
    const increment = numericTarget / speed;

    const updateCount = () => {
        count += increment;
        if (count < numericTarget) {
            let displayCount = count;
            if (numericTarget % 1 !== 0) {
                displayCount = count.toFixed(1);
            } else {
                displayCount = Math.floor(count);
            }
            
            // Add commas for thousands
            const formatted = displayCount.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            counter.innerText = prefix + formatted + suffix;
            setTimeout(updateCount, 1);
        } else {
            counter.innerText = target;
        }
    };

    updateCount();
};

// Smooth scrolling for navigation links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            navLinks.classList.remove('active'); // Close mobile menu if open
            target.scrollIntoView({
                behavior: 'smooth'
            });
        }
    });
});

// Scroll animations (Intersection Observer)
const revealElements = document.querySelectorAll('.business-card, .director-card, .impact-card, .timeline-item, .card, .stat-item');

const revealCallback = (entries, observer) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
            
            // If it's a stat item, trigger the counter
            const counter = entry.target.querySelector('.counter');
            if (counter) {
                startCounter(counter);
            }
            
            observer.unobserve(entry.target);
        }
    });
};

const revealObserver = new IntersectionObserver(revealCallback, {
    threshold: 0.1
});

revealElements.forEach(el => {
    el.style.opacity = '0';
    el.style.transform = 'translateY(30px)';
    el.style.transition = 'all 0.6s cubic-bezier(0.4, 0, 0.2, 1)';
    revealObserver.observe(el);
});

// Sticky header
const header = document.querySelector('header');
window.addEventListener('scroll', () => {
    if (window.scrollY > 100) {
        header.style.background = 'rgba(10, 10, 10, 0.98)';
        header.style.padding = '15px 0';
        header.style.backdropFilter = 'blur(20px)';
        header.style.borderBottom = '1px solid rgba(255,255,255,0.05)';
    } else {
        header.style.background = 'transparent';
        header.style.padding = '30px 0';
        header.style.backdropFilter = 'none';
        header.style.borderBottom = 'none';
    }
});
