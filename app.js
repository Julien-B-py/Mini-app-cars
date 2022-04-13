// Animate every car element
gsap.to(".car", { autoAlpha: 1, stagger: 0.3 });
// Animate every car characteristics
gsap
  .to(".right-part", 2, { x: 0, y: 0, ease: Expo.easeOut, stagger: 0.3 })
  .delay(1);
