import './bootstrap';

/* ------------------------------ 
    Alert Hide Otomatis   
--------------------------------- */
document.addEventListener('DOMContentLoaded', function () {
    const alerts = document.querySelectorAll('.alert');

    alerts.forEach(alert => {
        // Sembunyikan secara halus setelah 3 detik
        setTimeout(() => {
            alert.classList.add('opacity-0');
            setTimeout(() => {
                alert.style.display = 'none';
            }, 500); // waktu transisi sesuai duration-500
        }, 3000);
    });

    // Klik manual untuk menutup
    const closeButtons = document.querySelectorAll('[role="alert"] svg');
    closeButtons.forEach(button => {
        button.style.cursor = 'pointer';
        button.addEventListener('click', function () {
            const alert = this.closest('[role="alert"]');
            alert.classList.add('opacity-0');
            setTimeout(() => {
                alert.style.display = 'none';
            }, 300);
        });
    });
});


/* ------------------------------ 
    Profile Handle Edit, Cancel & Update Button   
--------------------------------- */
document.addEventListener('DOMContentLoaded', () => {
    const editBtn = document.getElementById('edit-btn');
    const updateBtn = document.getElementById('update-btn');
    const cancelBtn = document.getElementById('cancel-btn');
    const editableFields = document.querySelectorAll('.editable-field'); 
    const uploadBtn = document.getElementById('upload-button');
    const avatarInput = document.getElementById('avatar');
    const previewAvatarElem = document.getElementById('preview-avatar');
    
    // Simpan avatar asli saat halaman dimuat
    const originalAvatar = previewAvatarElem?.src;

    // Handle "Edit" button click
    editBtn?.addEventListener('click', () => {
        editableFields.forEach(input => input.removeAttribute('readonly')); 
        editableFields.forEach(input => input.disabled = false); 
        editBtn.classList.add('hidden');
        updateBtn?.classList.remove('hidden');
        cancelBtn?.classList.remove('hidden');
        uploadBtn?.classList.remove('hidden'); 
    });

    // Handle "Cancel" button click
    cancelBtn?.addEventListener('click', () => {
        editableFields.forEach(input => {
            input.setAttribute('readonly', true); 
            input.disabled = true; 
            input.value = input.defaultValue; 
        });
        editBtn?.classList.remove('hidden');
        updateBtn?.classList.add('hidden');
        cancelBtn.classList.add('hidden');
        uploadBtn?.classList.add('hidden');

        // Reset avatar input dan preview ke avatar asli
        if (avatarInput) avatarInput.value = '';
        if (previewAvatarElem) previewAvatarElem.src = originalAvatar;
    });

    // Handle "Upload" button click
    uploadBtn?.addEventListener('click', () => avatarInput?.click());

    // Preview avatar on file select
    avatarInput?.addEventListener('change', (event) => {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function () {
                if (previewAvatarElem) previewAvatarElem.src = reader.result;
            };
            reader.readAsDataURL(file);
        }
    });
});


/* ------------------------------ 
    Menu Notifition & Cart Book   
--------------------------------- */
document.addEventListener('DOMContentLoaded', () => {
    const cartBtn = document.getElementById('cartBtn');
    const notifBtn = document.getElementById('notifBtn');
    const cartMenu = document.getElementById('cartMenu');
    const notifMenu = document.getElementById('notifMenu');

    // Cek jika notif saja
    if (notifBtn && notifMenu) {
        notifBtn.addEventListener('click', () => {
            notifMenu.classList.toggle('hidden');
            if (cartMenu) cartMenu.classList.add('hidden');
        });

        document.addEventListener('click', (e) => {
            if (!notifBtn.contains(e.target) && !notifMenu.contains(e.target)) {
                notifMenu.classList.add('hidden');
            }
        });
    }

    // Cek jika cart juga ada
    if (cartBtn && cartMenu) {
        cartBtn.addEventListener('click', () => {
            cartMenu.classList.toggle('hidden');
            if (notifMenu) notifMenu.classList.add('hidden');
        });

        document.addEventListener('click', (e) => {
            if (!cartBtn.contains(e.target) && !cartMenu.contains(e.target)) {
                cartMenu.classList.add('hidden');
            }
        });
    }
});


/* ---------------------------- 
    Change Content Swipe Menu   
------------------------------- */
function showTab(tab) {
    const tabs = [
        { id: 'tab-default', content: 'content-default' },
        { id: 'tab-change', content: 'content-change' }
    ];
  
    tabs.forEach(({ id, content }) => {
        const button = document.getElementById(id);
        const section = document.getElementById(content);

        const isActive = tab === id.replace('tab-', '');

        // Reset semua style
        button.classList.remove(
            'text-light1', 'dark:text-dark1',
            'border-light1', 'dark:border-dark1'
        );
        button.classList.add('border-transparent');

        // Tampilkan tab aktif
        if (isActive) {
            section.classList.remove('hidden');
            button.classList.add(
                'text-light1', 'dark:text-dark1',
                'border-light1', 'dark:border-dark1'
            );
            button.classList.remove('border-transparent');
        } else {
            section.classList.add('hidden');
        }
    });
}

window.showTab = showTab;

document.addEventListener('DOMContentLoaded', () => {
    showTab('default');
});


/* ---------------------------- 
    Eye Open & Close Password  
------------------------------- */
function togglePassword(event) {
    const toggle = event.currentTarget;
    const container = toggle.closest('div.relative') || toggle.parentElement;

    if (!container) return;

    const input = container.querySelector('input[type="password"], input[type="text"]');
    const eyeOpen = container.querySelector('#eye-open');
    const eyeClosed = container.querySelector('#eye-closed');

    if (!input || !eyeOpen || !eyeClosed) return;

    const isHidden = input.type === 'password';
    input.type = isHidden ? 'text' : 'password';

    eyeOpen.classList.toggle('hidden', isHidden);
    eyeClosed.classList.toggle('hidden', !isHidden);
}

window.togglePassword = togglePassword;


/* -------------------------------- 
    Dark Mode All + Intraksinya  
----------------------------------- */
document.addEventListener('DOMContentLoaded', () => {
    const dropdownBtn = document.getElementById('dropdownBtn');
    const dropdownMenu = document.getElementById('dropdownMenu');

    dropdownBtn?.addEventListener('click', (e) => {
        dropdownMenu?.classList.toggle('hidden');
        e.stopPropagation();
    });
    
    document.addEventListener('click', (e) => {
        if (dropdownMenu && !dropdownMenu.contains(e.target) && !dropdownBtn?.contains(e.target)) {
            dropdownMenu.classList.add('hidden');
        }
    });

    const themeToggleBtn = document.getElementById('themeToggleBtn');
    const themeDropdown = document.getElementById('themeDropdown');

    themeToggleBtn?.addEventListener('click', (e) => {
        themeDropdown?.classList.toggle('hidden');
        e.stopPropagation();
    });

    document.addEventListener('click', (e) => {
        if (themeDropdown && !themeDropdown.contains(e.target) && !themeToggleBtn?.contains(e.target)) {
            themeDropdown.classList.add('hidden');
        }
    });

    // --- Theme Logic ---
    const themeButtons = themeDropdown?.querySelectorAll('button[data-theme]') || [];
    const themeSwitcher = document.getElementById('themeSwitcher');
    const themeLabel = document.getElementById('themeLabel');

    function applyTheme(theme) {
        if (theme === 'light') {
            document.documentElement.classList.remove('dark');
            document.body.classList.remove('bg-dark6');
            document.body.classList.add('bg-light6');
        } else if (theme === 'dark') {
            document.documentElement.classList.add('dark');
            document.body.classList.remove('bg-light6');
            document.body.classList.add('bg-dark6');
        } else if (theme === 'system') {
            const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
            if (prefersDark) {
                document.documentElement.classList.add('dark');
                document.body.classList.remove('bg-light6');
                document.body.classList.add('bg-dark6');
            } else {
                document.documentElement.classList.remove('dark');
                document.body.classList.remove('bg-dark6');
                document.body.classList.add('bg-light6');
            }
        }
    }

    function setActiveButton(selectedTheme) {
        if (!themeButtons.length) return;

        themeButtons.forEach(btn => {
            const isSelected = btn.getAttribute('data-theme') === selectedTheme;
            
            btn.classList.toggle('bg-light8', isSelected && selectedTheme === 'light');
            btn.classList.toggle('text-light1', isSelected && selectedTheme === 'light');

            btn.classList.toggle('bg-dark8', isSelected && selectedTheme === 'dark');
            btn.classList.toggle('text-dark1', isSelected && selectedTheme === 'dark');

            btn.classList.toggle('rounded-t-md', isSelected && selectedTheme === 'light');
            btn.classList.toggle('rounded-b-md', isSelected && selectedTheme === 'system');
        });
    }

    function syncSwitcherWithTheme(theme) {
        if (!themeSwitcher || !themeLabel) return;

        themeSwitcher.checked = theme === 'dark';
        themeLabel.textContent = theme === 'dark' ? 'Dark Mode' : 'Light Mode';
    }

    function loadTheme() {
        const savedTheme = localStorage.getItem('theme') || 'system';
        const effectiveTheme = savedTheme === 'system'
        ? (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light')
        : savedTheme;
        
        applyTheme(savedTheme);
        setActiveButton(savedTheme);
        syncSwitcherWithTheme(effectiveTheme);
    }

    // Handle dropdown buttons
    themeButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            const selectedTheme = btn.getAttribute('data-theme');
            localStorage.setItem('theme', selectedTheme);
            applyTheme(selectedTheme);
            setActiveButton(selectedTheme);
            syncSwitcherWithTheme(
                selectedTheme === 'system'
                ? (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light')
                : selectedTheme 
            );
        });
    });

    // Handle switcher toggle
    themeSwitcher?.addEventListener('change', () => {
        const selectedTheme = themeSwitcher.checked ? 'dark' : 'light';
        localStorage.setItem('theme', selectedTheme);
        applyTheme(selectedTheme);
        setActiveButton(selectedTheme);
        syncSwitcherWithTheme(selectedTheme);
    });
    
    loadTheme();
});


/* -------------------- 
    Navigation Link  
----------------------- */
const navLinks = document.querySelectorAll('.nav-link');
const sections = document.querySelectorAll('section[id]');

if (navLinks.length > 0) {
    navLinks[0].classList.add('active');
}

navLinks.forEach(link => {
    link.addEventListener('click', () => {
        navLinks.forEach(l => l.classList.remove('active')); 
        link.classList.add('active'); 
    });
});

// --- Observer untuk mendeteksi section yang kelihatan di layar ---
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        const id = entry.target.getAttribute('id');
        const navLink = document.querySelector(`.nav-link[href="#${id}"]`);

        if (entry.isIntersecting) {
            navLinks.forEach(link => link.classList.remove('active'));
            navLink?.classList.add('active');
        }
    });
}, {
    root: null,
    rootMargin: '0px',
    threshold: 0.6, 
});

sections.forEach(section => observer.observe(section));


/* ---------------------- 
    Header Scroll Hide  
------------------------- */
document.addEventListener("DOMContentLoaded", function () {
    const header = document.querySelector("header");
    let lastScrollY = window.scrollY;

    window.addEventListener("scroll", () => {
        const currentScrollY = window.scrollY;

        if (currentScrollY > lastScrollY && currentScrollY > 50) {
            // Scroll Down: hide header
            header.style.transform = "translateY(-120%)";
        } else {
            // Scroll Up: show header
            header.style.transform = "translateY(0)";
        }

        lastScrollY = currentScrollY;
    });

    // Optional: transition for smoothness
    header.style.transition = "transform 0.5s ease-in-out";
});


/* ---------------------- 
    Back to Top Button  
------------------------- */
document.addEventListener("DOMContentLoaded", () => {
    const backToTopButton = document.getElementById("backToTop");

    document.addEventListener("scroll", () => {
        if (document.documentElement.scrollTop > 200) {
            backToTopButton.classList.add("show");
        } else {
            backToTopButton.classList.remove("show");
        }
    });

    backToTopButton.addEventListener("click", () => {
        document.documentElement.scrollTo({ top: 0, behavior: "smooth" });
    });
});

