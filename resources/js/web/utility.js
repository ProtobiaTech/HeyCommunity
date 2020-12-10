window.makeUrl = function(path, params) {
  var origin = window.location.origin;
  var url = origin;

  if (path !== undefined) {
    url += path;
  }

  // TODO: params
  // if (params)

  return url;
};
