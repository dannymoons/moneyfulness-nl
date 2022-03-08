const labnolIframe = (thumbWrapper, videoID) => {
  const iframe = document.createElement("iframe");
  iframe.src = `https://www.youtube.com/embed/${videoID}?autoplay=1&rel=0`;
  iframe.setAttribute("frameborder", "0");
  iframe.setAttribute("allowfullscreen", "1");
  iframe.setAttribute(
    "allow",
    "accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
  );
  thumbWrapper.parentNode.replaceChild(iframe, thumbWrapper);
};

const init = (element) => {
  const videoID = element.dataset.id;
  const altText = element.dataset.alt ?? false;
  const thumbWrapper = document.createElement("div");
  const thumbImage = document.createElement("img");
  const thumbPlay = document.createElement("div");
  thumbImage.src = `https://i.ytimg.com/vi/${videoID}/hqdefault.jpg`;
  thumbImage.setAttribute("loading", "lazy");
  if (altText) thumbImage.setAttribute("alt", altText);
  thumbPlay.classList.add("play");
  thumbWrapper.appendChild(thumbImage);
  thumbWrapper.appendChild(thumbPlay);
  thumbWrapper.addEventListener("click", () =>
    labnolIframe(thumbWrapper, videoID)
  );
  element.appendChild(thumbWrapper);
};
export default init;
