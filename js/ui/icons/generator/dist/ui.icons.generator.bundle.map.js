{"version":3,"file":"ui.icons.generator.bundle.map.js","names":["this","BX","UI","Icons","exports","main_core","FileType","babelHelpers","classCallCheck","defineProperty","_Object$freeze","pictureIcon","audioIcon","getSvgFromString","svg","parser","DOMParser","doc","parseFromString","querySelector","FileTypeIcon","Object","freeze","PICTURE","AUDIO","getFileTypeIcon","fileType","_docColorByType","_angleColorByType","_classPrivateMethodInitSpec","obj","privateSet","_checkPrivateRedeclaration","add","privateCollection","has","TypeError","_classPrivateMethodGet","receiver","fn","presets","RAR","color","ZIP","GZIP","GZ","JPG","JPEG","WEBP","GIF","PNG","MOV","WEBM","AVI","MP3","WAV","PHP","PDF","PSD","TXT","DOC","DOCX","PPT","PPTX","XLS","XLSX","none","docColorByType","angleColorByType","fileTypesWithoutShowingExtension","_getBaseIcon","WeakSet","_getBaseIconParams","_addFileExtensionToIcon","_addFileTypeIcon","_isShowFileExtension","_createSvgElement","FileIcon","iconOptions","options","Type","isPlainObject","name","align","isStringFilled","size","isNumber","mini","isBoolean","setColor","setName","setType","createClass","key","value","preset","length","toUpperCase","generate","icon","_getBaseIcon2","call","_addFileTypeIcon2","_isShowFileExtension2","_addFileExtensionToIcon2","generateURI","encodeURIComponent","outerHTML","renderTo","node","isDomNode","appendChild","_classPrivateMethodGe","_getBaseIconParams2","viewBox","container","_createSvgElement2","width","concat","style","fill","sheetIcon","d","sheetAngleIconStartPosX","sheetAngleIcon","opacity","iconSize","viewBoxParam","nameNode","height","x","y","rect","rx","ry","text","textNode","document","createTextNode","ARCHIVE","iconType","MEDIA","_iconType","iconContainer","_iconContainer","includes","tag","params","element","createElementNS","setAttribute","property","setAttributeNS","FileIconPresets","Generator"],"sources":["ui.icons.generator.bundle.js"],"mappings":"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"}