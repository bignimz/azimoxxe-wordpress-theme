const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    console.log(entry);
    if (entry.isIntersecting) {
      entry.target.classList.add("show");
    } else {
      entry.target.classList.remove("show");
    }
  });
});

const hiddenElements = document.querySelectorAll(".hidden");
hiddenElements.forEach((el) => observer.observe(el));

const observer2 = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    console.log(entry);
    if (entry.isIntersecting) {
      entry.target.classList.add("show2");
    } else {
      entry.target.classList.remove("show2");
    }
  });
});

const hidden2Elements = document.querySelectorAll(".hidden2");
hidden2Elements.forEach((el) => observer2.observe(el));

const observer3 = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    console.log(entry);
    if (entry.isIntersecting) {
      entry.target.classList.add("show3");
    } else {
      entry.target.classList.remove("show3");
    }
  });
});

const hidden3Elements = document.querySelectorAll(".hidden3");
hidden3Elements.forEach((el) => observer3.observe(el));
