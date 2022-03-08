const loader = (file, selector = false) => {
  if (selector) {
    const elements = [...document.querySelectorAll(selector)];
  
    if (elements.length) {
      import(`../${file}.js`).then((module) => {
        for (const element of elements) {
          module.default(element);
        }
      });
    }
  } else {
    import(`../${file}.js`).then((module) => module.default());
  }
}

export default loader;