!function (t) { function e(t, e) { this.settings = Object.assign({ duplicates: !1 }, e), this.value = [], this.build(t), this.events() } jQuery.fn.tagify = function (t) { var i; return this.data("tagify") ? this : (i = new e(this[0], t), this.data("tagify", i), this) }, e.prototype = { build: function (t) { var e = t.value; this.DOM = {}, this.DOM.originalInput = t, this.DOM.scope = document.createElement("tags"), this.DOM.scope.innerHTML = '<div><span class="input placeholder" data-placeholder="' + t.placeholder + '" contenteditable></span></div>', this.DOM.input = this.DOM.scope.querySelector("span"), t.parentNode.insertBefore(this.DOM.scope, t), this.DOM.scope.appendChild(t), e && this.addTag(e).forEach(function (t) { t && t.classList.add("tagify--noAnim") }) }, events: function () { this.DOM.input.addEventListener("focus", this.callbacks.onFocusBlur.bind(this)), this.DOM.input.addEventListener("blur", this.callbacks.onFocusBlur.bind(this)), this.DOM.input.addEventListener("input", this.callbacks.onInput.bind(this)), this.DOM.input.addEventListener("keydown", this.callbacks.onKeydown.bind(this)), this.DOM.scope.addEventListener("click", this.callbacks.onClickScope.bind(this)) }, callbacks: { onFocusBlur: function (t) { var e = t.target.textContent.replace(/\u200B/g, "").trim(); "focus" == t.type ? t.target.className = "input" : "blur" == t.type && "" == e && (t.target.className = "input placeholder") }, onKeydown: function (t) { var e = t.target.textContent; if ("Backspace" != t.key || "" != e && 8203 != e.charCodeAt(0) || this.removeTag(this.DOM.scope.querySelectorAll("tag:not(.tagify--hide)").length - 1), "Escape" == t.key && (t.target.textContent = "", t.target.blur()), "Enter" == t.key) return t.preventDefault(), this.addTag(e) && (t.target.innerHTML = ""), !1 }, onInput: function (t) { var e = t.target.textContent; e[e.length - 1]; -1 != e.indexOf(",") && (this.addTag(e), t.target.textContent = "") }, onClickScope: function (t) { "TAGS" == t.target.tagName && this.DOM.input.focus(), "X" == t.target.tagName && this.removeTag(this.getNodeindex(t.target.parentNode)) } }, getNodeindex: function (t) { for (var e = 0; t = t.previousSibling;)3 == t.nodeType && /^\s*$/.test(t.data) || e++; return e }, markTagByValue(t) { var e = this.value.indexOf(t), i = this.DOM.scope.querySelectorAll("tag")[e]; return !!i && (i.classList.add("tagify--mark"), setTimeout(() => { i.classList.remove("tagify--mark") }, 2e3), !0) }, addTag: function (t) { var e = this; if (t = t.replace(/\u200B/g, "")) return t.split(",").filter(function (t) { return !!t }).map(function (t) { var i = document.createElement("tag"); return t = t.trim(), !(!e.settings.duplicates && e.markTagByValue(t)) && (i.innerHTML = "<x></x><span>" + t + " </span>", e.DOM.scope.insertBefore(i, e.DOM.input.parentNode), e.value.push(t), e.update(), i) }) }, removeTag: function (t) { var e = this.DOM.scope.children[t]; e && (e.style.width = parseFloat(window.getComputedStyle(e).width) + "px", document.body.clientTop, e.classList.add("tagify--hide"), setTimeout(function () { e.parentNode.removeChild(e) }, 400), this.value.splice(t, 1), this.update()) }, update: function () { this.DOM.originalInput.value = this.value.join(", ") } } }();