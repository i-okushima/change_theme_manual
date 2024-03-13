document.addEventListener("DOMContentLoaded", () => {
  const themeToggleButton = document.getElementById("theme-toggle");
  const fontToggleButton = document.getElementById("font-toggle");
  const themeToggleButtonLabel = document.getElementById("theme-toggle-label");
  const fontToggleButtonLabel = document.getElementById("font-toggle-label");
  const htmlElement = document.documentElement;
  const divElement = document.getElementById("bgchange");

  // ページが読み込まれた際に保存されたテーマの状態とフォントの状態を読み込む
  const savedTheme = localStorage.getItem("theme");
  const savedFont = localStorage.getItem("font");
  if (savedTheme === "dark") {
    htmlElement.classList.add("dark");
    divElement.classList.add("dark");
    themeToggleButton.checked = true;
    themeToggleButtonLabel.classList.add("disabled-transition"); // transitionを無効にするクラスを追加
  } else {
    htmlElement.classList.add("light");
    themeToggleButton.checked = false;
  }

  if (savedFont === "mincho") {
    htmlElement.classList.add("font-mincho");
    fontToggleButton.checked = true;
    fontToggleButtonLabel.classList.add("disabled-transition"); // transitionを無効にするクラスを追加
  } else {
    htmlElement.classList.add("font-gothic");
    fontToggleButton.checked = false;
  }

  // トグルボタンが変更されたときに選択されたテーマの状態を保存する
  themeToggleButton.addEventListener("change", () => {
    if (themeToggleButton.checked) {
      htmlElement.classList.add("dark");
      htmlElement.classList.remove("light");
      divElement.classList.add("dark");
      localStorage.setItem("theme", "dark");
    } else {
      htmlElement.classList.add("light");
      htmlElement.classList.remove("dark");
      divElement.classList.remove("dark");
      themeToggleButtonLabel.classList.remove("disabled-transition"); // transitionを無効にするクラスを削除
      localStorage.setItem("theme", "light");
    }
  });

  // フォントトグルボタンが変更されたときに選択されたフォントの状態を切り替える
  fontToggleButton.addEventListener("change", () => {
    if (fontToggleButton.checked) {
      htmlElement.classList.add("font-mincho");
      htmlElement.classList.remove("font-gothic");
      localStorage.setItem("font", "mincho");
    } else {
      htmlElement.classList.add("font-gothic");
      htmlElement.classList.remove("font-mincho");
      fontToggleButtonLabel.classList.remove("disabled-transition"); // transitionを無効にするクラスを削除
      localStorage.setItem("font", "gothic");
    }
  });
});
