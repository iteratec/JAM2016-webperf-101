(function(a){a.fn.shuffle=function(){return this.each(function(){var b=a(this).children().clone(true);return(b.length)?a(this).html(a.shuffle(b)):this})};a.shuffle=function(c){for(var d,b,e=c.length;e;d=parseInt(Math.random()*e),b=c[--e],c[e]=c[d],c[d]=b){}return c}})(jQuery);