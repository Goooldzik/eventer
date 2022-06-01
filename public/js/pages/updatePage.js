/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/pages/updatePage.js":
/*!******************************************!*\
  !*** ./resources/js/pages/updatePage.js ***!
  \******************************************/
/***/ (() => {

eval("$(function () {\n  $('.update-page').click(function () {\n    updatePage();\n  });\n});\n\nvar updatePage = function updatePage() {\n  $.ajax({\n    url: updatePageUrl,\n    method: 'PUT',\n    data: {\n      title: $('#title').val(),\n      content: $('#content').val()\n    },\n    success: function success(response) {\n      Swal.fire({\n        icon: response.status,\n        text: response.message\n      }).then(function (result) {\n        if (result) {\n          window.location.reload();\n        }\n      });\n    },\n    error: function error(response) {\n      Swal.fire({\n        icon: 'error',\n        text: response.responseJSON.message\n      });\n    }\n  });\n};//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6WyIkIiwiY2xpY2siLCJ1cGRhdGVQYWdlIiwiYWpheCIsInVybCIsInVwZGF0ZVBhZ2VVcmwiLCJtZXRob2QiLCJkYXRhIiwidGl0bGUiLCJ2YWwiLCJjb250ZW50Iiwic3VjY2VzcyIsInJlc3BvbnNlIiwiU3dhbCIsImZpcmUiLCJpY29uIiwic3RhdHVzIiwidGV4dCIsIm1lc3NhZ2UiLCJ0aGVuIiwicmVzdWx0Iiwid2luZG93IiwibG9jYXRpb24iLCJyZWxvYWQiLCJlcnJvciIsInJlc3BvbnNlSlNPTiJdLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvcGFnZXMvdXBkYXRlUGFnZS5qcz9jYWFiIl0sInNvdXJjZXNDb250ZW50IjpbIiQoZnVuY3Rpb24gKCkge1xuICAgICQoJy51cGRhdGUtcGFnZScpLmNsaWNrKGZ1bmN0aW9uICgpIHtcbiAgICAgICAgdXBkYXRlUGFnZSgpXG4gICAgfSlcbn0pXG5cbmxldCB1cGRhdGVQYWdlID0gKCkgPT4ge1xuICAgICQuYWpheCh7XG4gICAgICAgIHVybDogdXBkYXRlUGFnZVVybCxcbiAgICAgICAgbWV0aG9kOiAnUFVUJyxcbiAgICAgICAgZGF0YToge1xuICAgICAgICAgICAgdGl0bGU6ICQoJyN0aXRsZScpLnZhbCgpLFxuICAgICAgICAgICAgY29udGVudDogJCgnI2NvbnRlbnQnKS52YWwoKVxuICAgICAgICB9LFxuICAgICAgICBzdWNjZXNzOiBmdW5jdGlvbiAocmVzcG9uc2UpIHtcbiAgICAgICAgICAgIFN3YWwuZmlyZSh7XG4gICAgICAgICAgICAgICAgaWNvbjogcmVzcG9uc2Uuc3RhdHVzLFxuICAgICAgICAgICAgICAgIHRleHQ6IHJlc3BvbnNlLm1lc3NhZ2VcbiAgICAgICAgICAgIH0pLnRoZW4oKHJlc3VsdCkgPT4ge1xuICAgICAgICAgICAgICAgIGlmKHJlc3VsdClcbiAgICAgICAgICAgICAgICB7XG4gICAgICAgICAgICAgICAgICAgIHdpbmRvdy5sb2NhdGlvbi5yZWxvYWQoKTtcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICB9KTtcbiAgICAgICAgfSxcbiAgICAgICAgZXJyb3I6IGZ1bmN0aW9uIChyZXNwb25zZSkge1xuICAgICAgICAgICAgU3dhbC5maXJlKHtcbiAgICAgICAgICAgICAgICBpY29uOiAnZXJyb3InLFxuICAgICAgICAgICAgICAgIHRleHQ6IHJlc3BvbnNlLnJlc3BvbnNlSlNPTi5tZXNzYWdlXG4gICAgICAgICAgICB9KTtcbiAgICAgICAgfVxuICAgIH0pXG59XG4iXSwibWFwcGluZ3MiOiJBQUFBQSxDQUFDLENBQUMsWUFBWTtFQUNWQSxDQUFDLENBQUMsY0FBRCxDQUFELENBQWtCQyxLQUFsQixDQUF3QixZQUFZO0lBQ2hDQyxVQUFVO0VBQ2IsQ0FGRDtBQUdILENBSkEsQ0FBRDs7QUFNQSxJQUFJQSxVQUFVLEdBQUcsU0FBYkEsVUFBYSxHQUFNO0VBQ25CRixDQUFDLENBQUNHLElBQUYsQ0FBTztJQUNIQyxHQUFHLEVBQUVDLGFBREY7SUFFSEMsTUFBTSxFQUFFLEtBRkw7SUFHSEMsSUFBSSxFQUFFO01BQ0ZDLEtBQUssRUFBRVIsQ0FBQyxDQUFDLFFBQUQsQ0FBRCxDQUFZUyxHQUFaLEVBREw7TUFFRkMsT0FBTyxFQUFFVixDQUFDLENBQUMsVUFBRCxDQUFELENBQWNTLEdBQWQ7SUFGUCxDQUhIO0lBT0hFLE9BQU8sRUFBRSxpQkFBVUMsUUFBVixFQUFvQjtNQUN6QkMsSUFBSSxDQUFDQyxJQUFMLENBQVU7UUFDTkMsSUFBSSxFQUFFSCxRQUFRLENBQUNJLE1BRFQ7UUFFTkMsSUFBSSxFQUFFTCxRQUFRLENBQUNNO01BRlQsQ0FBVixFQUdHQyxJQUhILENBR1EsVUFBQ0MsTUFBRCxFQUFZO1FBQ2hCLElBQUdBLE1BQUgsRUFDQTtVQUNJQyxNQUFNLENBQUNDLFFBQVAsQ0FBZ0JDLE1BQWhCO1FBQ0g7TUFDSixDQVJEO0lBU0gsQ0FqQkU7SUFrQkhDLEtBQUssRUFBRSxlQUFVWixRQUFWLEVBQW9CO01BQ3ZCQyxJQUFJLENBQUNDLElBQUwsQ0FBVTtRQUNOQyxJQUFJLEVBQUUsT0FEQTtRQUVORSxJQUFJLEVBQUVMLFFBQVEsQ0FBQ2EsWUFBVCxDQUFzQlA7TUFGdEIsQ0FBVjtJQUlIO0VBdkJFLENBQVA7QUF5QkgsQ0ExQkQiLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvcGFnZXMvdXBkYXRlUGFnZS5qcy5qcyIsInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/pages/updatePage.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/pages/updatePage.js"]();
/******/ 	
/******/ })()
;