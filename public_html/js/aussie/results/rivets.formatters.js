rivets.formatters.shortdate = function (value) {
    return moment(value).format('YYYY-MM-DD');
};

rivets.formatters.date = function(value) {
    if (!value || !value.substr) {
        return;
    }
    return value.substr(0, '0000-00-00'.length);
}

rivets.formatters.fulldate = function (value) {
    return new Date(value * 1000).toLocaleString();
}

rivets.formatters.number = function (value) {
    return +value;
};

rivets.formatters.string = function (value) {
    return String(value);
};

rivets.formatters.negate = function (value) {
    return !value;
};

rivets.formatters.eq = function (value, args) {
    return value === args;
};

rivets.formatters.not_eq = function (value, args) {
    return value != args;
};

rivets.formatters.blank = function (value) {
    return value == null || value === "";
};

rivets.formatters.capitalize = function(value) {
    return value.charAt(0).toUpperCase() + value.slice(1);
}

rivets.formatters.gt = function(value, arg) {
    return value > arg;
};

rivets.formatters.lt = function(value, arg) {
    return value < arg;
};

rivets.formatters.position_diff = function(position) {
    return position.rate - position.entryRate;
}

rivets.formatters.notActivatedOrWorking = function(model) {
    return model.Activated && !model.working;
}

rivets.formatters.toArray = function(model) {

    var arr = [];
    for (var key in model) {
        arr.push({key : key, value : model[key]});
    }

    return arr;
};

rivets.formatters.default = function(model, defaultValue) {
    if (typeof model == 'undefined') {
        return defaultValue;
    }

    return model;
};

rivets.formatters.tie_or_sold = function(model) {
    if (model == 'tie' || model == 'sold' || model == 'canceled') {
        return true;
    }
    return false;
}

rivets.formatters.max_value = function(value) {
    if(typeof(value)!='undefined') {
    var value_str = (typeof(value)!='string') ? value.toString() : value;
      var amount= value_str.indexOf('.');
      if(amount==-1)
          amount=value_str.length ;
       return Math.pow(10,amount);
}
 return 1000;
}
rivets.formatters.customAmount = function() {

    var amounts = ['25', '50', '100', '150'];

    return function(model) {
        if (amounts.indexOf(model) == -1) {
            return true;
        }
    }
}();