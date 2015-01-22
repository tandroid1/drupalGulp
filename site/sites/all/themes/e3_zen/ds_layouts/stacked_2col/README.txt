STYLING INSTRUCTIONS
--------------------

The following CSS should be included in the main layouts stylesheet:

.ds-2col-stacked-collapsable > .group-main {
  overflow: hidden;
}
.ds-2col-stacked-collapsable > .group-footer {
  clear: both;
}

.group-main will always be our collapsable column. It is assumed it always exists. It shouldn't 
need any widths, floating, positing, etc.

.group-aside is the assumed "vanishing" column. It will get floated left/right with any widths/
padding/margin assigned. Based on the size of this column, .group-main will adjust accordingly. 
This will allow for per entity/bundle/view mode layouts by simply adding something like: 

.ds-2col-stacked-collapsable.view-mode-teaser > .group-aside {
  float: left;
  margin-right: 25px;
  width: 100px;
}