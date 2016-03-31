<?php
define("CONTROLLER", "PD9waHAKCmNsYXNzIGNvbnRyb2xsZXIKewogIGZ1bmN0aW9uIF9fcmVuZGVyKCRtZXRob2QpIHsKICAgIGlmICghaXNzZXQoJEdMT0JBTFNbInJlbmRlciJdKSkgewogICAgICAkR0xPQkFMU1sicmVuZGVyIl0gPSAkbWV0aG9kOwogICAgfQoKICAgICRjb250U3RyaW5nID0gc3RyX3JlcGxhY2UoIl9jb250cm9sbGVyIiwgIiIsIGdldF9jbGFzcygkdGhpcykpOwoKICAgICRmaWxlID0gJF9TRVJWRVJbIkRPQ1VNRU5UX1JPT1QiXS4iLy4uL2FwcC92aWV3cy97JGNvbnRTdHJpbmd9L3skbWV0aG9kfS5waHAiOwoKICAgIGlmICghZmlsZV9leGlzdHMoJGZpbGUpKSB7CiAgICAgIGVjaG8gX19ESVJfXy4nPGJyPic7CiAgICAgIGVjaG8gJGZpbGUuJzxicj4nOwogICAgICBlY2hvIHZhcl9kdW1wKCR0aGlzIGluc3RhbmNlb2YgbWFpbl9jb250cm9sbGVyKTsKICAgICAgZWNobyAnPGJyPicuZ2V0X2NsYXNzKCR0aGlzKS4nPGJyPic7CiAgICAgIGRpZSgiVmlldyBub3QgZm91bmQuIik7CiAgICB9CgogICAgb2Jfc3RhcnQoKTsKICAgIGluY2x1ZGUoJGZpbGUpOwogICAgcmV0dXJuIG9iX2dldF9jbGVhbigpOwogIH0KfQoKPz4K");
define("DATABASE", "PD9waHAKICAkZGF0YWJhc2VbInVzZXJuYW1lIl0gPSAidXNlcm5hbWUiOwoKICAvLyBOZXZlciBzdG9yZSBhIHBhc3N3b3JkIGluIHBsYWluIHRleHQKICAkZGF0YWJhc2VbInBhc3N3b3JkIl0gPSAkX0VOVlsicGhwbXZjLWRhdGFiYXNlLXBhc3N3b3JkIl07CiAgJGRhdGFiYXNlWyJkYXRhYmFzZSJdID0gImRhdGFiYXNlIjsKICAkZGF0YWJhc2VbImhvc3QiXSAgICAgPSAibG9jYWxob3N0IjsKICAkZGF0YWJhc2VbInBvcnQiXSAgICAgPSAzMzA2OwoKICBmdW5jdGlvbiBnZXRNeVNRTCgpIHsKICAgIHJldHVybiBuZXcgbXlzcWxpKCRkYXRhYmFzZVsiaG9zdCJdLiI6Ii4kZGF0YWJhc2VbInBvcnQiXSwgJGRhdGFiYXNlWyJ1c2VybmFtZSJdLCAkZGF0YWJhc2VbInBhc3N3b3JkIl0sICRkYXRhYmFzZVsiZGF0YWJhc2UiXSk7CiAgfQo/Pgo=");
define("DEFAULT_ACTION", "ICBmdW5jdGlvbiAlJUFDVElPTk5BTUUlJSgpIHsKCiAgfQo=");
define("DEFAULT_CONTROLLER", "PD9waHAKY2xhc3MgJSVDT05UUk9MTEVSTkFNRSUlX2NvbnRyb2xsZXIgZXh0ZW5kcyBjb250cm9sbGVyCnsKJSVBQ1RJT05ERUZTJSUKfQo/Pgo=");
define("DEFAULT_LAYOUT", "PCFET0NUWVBFIGh0bWw+CjxodG1sPgogIDxoZWFkPgogICAgPG1ldGEgY2hhcnNldD0iVVRGLTgiIC8+CiAgICA8dGl0bGU+UEhQLU1WQyBBcHBsaWNhdGlvbjwvdGl0bGU+CiAgICA8bGluayByZWw9InN0eWxlc2hlZXQiIGhyZWY9Ii9hc3NldHMvc3R5bGVzaGVldHMvYXBwbGljYXRpb24uY3NzIiAvPgogICAgPHNjcmlwdCBzcmM9Ii9hc3NldHMvamF2YXNjcmlwdHMvYXBwbGljYXRpb24uanMiIC8+CiAgPC9oZWFkPgogIDxib2R5PgogICAgPD9waHAgZWNobyAkR0xPQkFMU1sicmVuZGVyZWQiXTsgPz4KICA8L2JvZHk+CjwvaHRtbD4K");
define("DEFAULT_MODEL", "PD9waHAKY2xhc3MgJSVNT0RFTE5BTUUlJSBleHRlbmRzIG1vZGVsCnsKICAgIAp9Cj8+Cg==");
define("DEFAULT_ROUTE", "PD9waHAKICBkZWZpbmUoIlJFUVVFU1RfVVJJIiwgcGFyc2VfdXJsKCRfU0VSVkVSWyJSRVFVRVNUX1VSSSJdLCBQSFBfVVJMX1BBVEgpKTsKICBkZWZpbmUoIk1FVEhPRCIsICRfU0VSVkVSWyJSRVFVRVNUX01FVEhPRCJdKTsKCiAgcmVxdWlyZSgkX1NFUlZFUlsiRE9DVU1FTlRfUk9PVCJdLiIvLi4vcm91dGVyL3JvdXRlci5waHAiKTsKPz4K");
define("MODEL", "PD9waHAKY2xhc3MgbW9kZWwKewogIHByaXZhdGUgJHZhbHM7CiAgcHJpdmF0ZSAkdmFsaWQ7CgogIHByaXZhdGUgJGV4dHJhOwoKICBwdWJsaWMgc3RhdGljIGZ1bmN0aW9uIGZpbmQoJGlkKSB7CiAgICBpZihleGlzdHMoc3RydG9sb3dlcihnZXRfY2FsbGVkX2NsYXNzKCkpLidzJywgJGlkKSkgewogICAgICAkc3RyID0gZ2V0X2NhbGxlZF9jbGFzcygpOwogICAgICByZXR1cm4gbmV3ICRzdHIoZ2V0X2RhdGEoc3RydG9sb3dlcihnZXRfY2FsbGVkX2NsYXNzKCkpLidzJywgJGlkKSk7CiAgICB9IGVsc2UgewogICAgICBkaWUoIk5vIHJlY29yZCBmb3VuZCB3aXRoIHRoYXQgdmFsdWUuIik7CiAgICB9CiAgfQoKICBwcml2YXRlIGZ1bmN0aW9uIF9fY29uc3RydWN0KCRhcnIgPSBbXSkgewogICAgJHZhbHMgPSAkYXJyOwogICAgZm9yZWFjaCAoJGFyciBhcyAka2V5ID0+ICR2YWx1ZSkgewogICAgICAkdmFsaWRbXSA9ICRrZXk7CiAgICB9CiAgfQoKICBwdWJsaWMgc3RhdGljIGZ1bmN0aW9uIGNyZWF0ZSgkYXJyID0gW10pIHsKICAgICRjbGFzcyA9IGdldF9jYWxsZWRfY2xhc3MoKTsKICAgICRvYmogPSAgbmV3ICRjbGFzcygkYXJyKTsKICAgIHJldHVybiAkb2JqOwogIH0KCiAgcHVibGljIHN0YXRpYyBmdW5jdGlvbiB3aGVyZSgkc3RyKSB7CiAgICAkc3FsID0gZ2V0TXlTUUwoKTsKICAgICRheCA9IHN0cnRvbG93ZXIoZ2V0X2NhbGxlZF9jbGFzcygpKS4ncyc7CgogICAgaWYgKCRzdHIgaW5zdGFuY2VvZiBzdHJpbmcpIHsKICAgICAgJHJlcyA9ICRzcWwtPnF1ZXJ5KCRzdHIpOwoKICAgICAgcmV0dXJuICRhYiA9ICRyZXMtPmZldGNoX2Fzc29jKCkgPyAkYWIgOiBOVUxMOwogICAgfSBlbHNlIGlmICgkc3RyIGluc3RhbmNlb2YgYXJyYXkpIHsKICAgICAgJGZpbiA9ICIiOwoKCiAgICAgIGZvcmVhY2ggKCRzdHIgYXMgJGtleSA9PiAkdmFsdWUpIHsKICAgICAgICBpZiAoJGZpbiA9PSAiIikgewogICAgICAgICAgJGZpbiA9ICJgJGtleWA9JyR2YWx1ZScgIjsKICAgICAgICAgIGNvbnRpbnVlOwogICAgICAgIH0KCiAgICAgICAgJGZpbiAuPSAiQU5EIGAka2V5YD0nJHZhbHVlJyAiOwogICAgICB9CiAgICAgIHJlcXVpcmUoJF9TRVJWRVJbIkRPQ1VNRU5UX1JPT1QiXS4iLy4uL2NvbmZpZy9kYXRhYmFzZS5waHAiKTsKCgoKICAgICAgJHJlcyA9ICRzcWwtPnF1ZXJ5KCJTRUxFQ1QgKiBGUk9NIGAkYXhgIFdIRVJFICRmaW4iKTsKCiAgICAgIHJldHVybiAkYWIgPSAkcmVzLT5mZXRjaF9hc3NvYygpID8gJGFiIDogTlVMTDsKICAgIH0KICB9CgogIHB1YmxpYyBmdW5jdGlvbiBfX2dldCgkdmFyKSB7CiAgICBpZiAoISBpbl9hcnJheSgkdmFyLCAkdmFsaWQpKSB7CiAgICAgIHJldHVybiBOVUxMOwogICAgfQogICAgcmV0dXJuICR2YWxzWyR2YXJdOwogIH0KCiAgcHVibGljIGZ1bmN0aW9uIF9fc2V0KCR2YXIsICR2YWwpIHsKICAgIGlmICghIGluX2FycmF5KCR2YXIsICR2YWxpZCkpIHsKICAgICAgcmV0dXJuOwogICAgfQogICAgaWYgKCR2YXIgPSBnZXRfdW5pcXVlX2NvbHVtbihzdHJ0b2xvd2VyKGdldF9jbGFzcygkdGhpcykpLidzJykpIHsKICAgICAgJHRibCA9IHN0cnRvbG93ZXIoZ2V0X2NsYXNzKCR0aGlzKSkuJ3MnOwogICAgICAkY29sID0gZ2V0X3VuaXF1ZV9jb2x1bW4oJHRibCk7CiAgICAgICRleHRyYSA9ICJERUxFVEUgRlJPTSBgJHRibGAgV0hFUkUgYCRjb2xgPSciLiR2YWxzWyR2YXJdLiInIjsKICAgIH0KICAgICR2YWxzWyR2YXJdID0gJHZhbDsKICB9CgogIHB1YmxpYyBmdW5jdGlvbiBzYXZlKCkgewogICAgcmVxdWlyZSgkX1NFUlZFUlsiRE9DVU1FTlRfUk9PVCJdLiIvLi4vY29uZmlnL2RhdGFiYXNlLnBocCIpOwogICAgJHNxbCA9IGdldE15U1FMKCk7CiAgICAkdGJsID0gc3RydG9sb3dlcihnZXRfY2xhc3MoJHRoaXMpKS4ncyc7CgogICAgaWYgKCRleHRyYSkgewogICAgICAkc3FsLT5xdWVyeSgkZXh0cmEpOwogICAgfQoKICAgIGlmICgkdGhpcy0+ZXhpc3RzKCkpIHsKICAgICAgJGluYyA9ICIiOwogICAgICBmb3JlYWNoICgkdmFscyBhcyAka2V5ID0+ICR2YWx1ZSkgewogICAgICAgIGlmICgkaW5jID09ICIiKSB7CiAgICAgICAgICAkaW5jIC49ICJgJGtleWA9JyR2YWx1ZSciOwogICAgICAgICAgY29udGludWU7CiAgICAgICAgfQogICAgICAgICRpbmMgLj0gIixgJGtleWA9JyR2YWx1ZSciOwogICAgICB9CgogICAgICAkY29sID0gZ2V0X3VuaXF1ZV9jb2x1bW4oJHRibCk7CgogICAgICAkc3FsLT5xdWVyeSgiVVBEQVRFIGAkdGJsYCBTRVQgJGluYyBXSEVSRSBgJGNvbGA9JyIuJHZhbHNbJGNvbF0uIiciKTsKICAgIH0gZWxzZSB7CiAgICAgICRpbmMgPSAiIjsKICAgICAgJGluY3ZhbHMgPSAiIjsKCiAgICAgIGZvcmVhY2ggKCR2YWxzIGFzICRrZXkgPT4gJHZhbHVlKSB7CiAgICAgICAgaWYgKCRpbmMgPT0gIiIpIHsKICAgICAgICAgICRpbmMgLj0gImAka2V5YCI7CiAgICAgICAgICAkaW5jdmFscyAuPSAiJyR2YWx1ZSciOwogICAgICAgICAgY29udGludWU7CiAgICAgICAgfQoKICAgICAgICAkaW5jIC49ICIsYCRrZXlgIjsKICAgICAgICAkaW5jdmFscyAuPSAiLCckdmFsdWUnIjsKICAgICAgfQoKICAgICAgJHNxbC0+cXVlcnkoIklOU0VSVCBJTlRPIGAkdGJsYCAoJGluYykgVkFMVUVTICgkaW5jdmFscykiKTsKICAgIH0KICB9CgogIHByaXZhdGUgc3RhdGljIGZ1bmN0aW9uIGdldF91bmlxdWVfY29sdW1uKCRtb2RlbCkgewogICAgcmVxdWlyZSgkX1NFUlZFUlsiRE9DVU1FTlRfUk9PVCJdLiIvLi4vY29uZmlnL2RhdGFiYXNlLnBocCIpOwoKICAgICRzcWwgPSBnZXRNeVNRTCgpOwoKICAgICRyZXMgPSAkc3FsLT5xdWVyeSgiU0hPVyBLRVlTIEZST00gYCRtb2RlbGAgV0hFUkUgS2V5X25hbWU9J1BSSU1BUlknIik7CgogICAgJGNvbDsKCiAgICBpZiAoJHJvdyA9ICRyZXMgLT4gZmV0Y2hfYXNzb2MoKSkgewogICAgICByZXR1cm4gJHJvd1siQ29sdW1uX25hbWUiXTsKICAgIH0gZWxzZSB7CiAgICAgIHJldHVybiBOVUxMOwogICAgfQogIH0KCiAgcHJpdmF0ZSBzdGF0aWMgZnVuY3Rpb24gZXhpc3RzKCRtb2RlbCwgJGtleSkgewogICAgcmVxdWlyZSgkX1NFUlZFUlsiRE9DVU1FTlRfUk9PVCJdLiIvLi4vY29uZmlnL2RhdGFiYXNlLnBocCIpOwoKICAgICRzcWwgPSBnZXRNeVNRTCgpOwoKICAgICRjb2wgPSBnZXRfdW5pcXVlX2NvbHVtbigkbW9kZWwpOwoKICAgICRyZXMgPSAkc3FsLT5xdWVyeSgiU0VMRUNUICogRlJPTSBgJHRibG5hbWVgIFdIRVJFIGAkY29sYD0kaWQiKTsKCiAgICBpZiAoJHJvdyA9ICRyZXMtPmZldGNoX2Fzc29jKCkpIHsKICAgICAgcmV0dXJuIHRydWU7CiAgICB9IGVsc2UgewogICAgICByZXR1cm4gZmFsc2U7CiAgICB9CiAgfQoKICBwcml2YXRlIHN0YXRpYyBmdW5jdGlvbiBnZXRfZGF0YSgkbW9kZWwsICRrZXkpIHsKICAgIHJlcXVpcmUoJF9TRVJWRVJbIkRPQ1VNRU5UX1JPT1QiXS4iLy4uL2NvbmZpZy9kYXRhYmFzZS5waHAiKTsKCiAgICAkc3FsID0gZ2V0TXlTUUwoKTsKCiAgICAkY29sID0gZ2V0X3VuaXF1ZV9jb2x1bW4oJG1vZGVsKTsKCiAgICAkcmVzID0gJHNxbC0+cXVlcnkoIlNFTEVDVCAqIEZST00gYCR0YmxuYW1lYCBXSEVSRSBgJGNvbGA9JGlkIik7CgogICAgaWYgKCRyb3cgPSAkcmVzLT5mZXRjaF9hc3NvYygpKSB7CiAgICAgIHJldHVybiAkcm93OwogICAgfSBlbHNlIHsKICAgICAgcmV0dXJuIE5VTEw7CiAgICB9CiAgfQp9Cj8+Cg==");
define("ROUTER", "PD9waHAKICAvLyBObyBuZWVkIHRvIHRvdWNoIHRoaXMgZmlsZSB1bmxlc3MgeW91J3JlIGJyYXZlLgoKICByZXF1aXJlKCRfU0VSVkVSWyJET0NVTUVOVF9ST09UIl0uIi8uLi9jb25maWcvcm91dGVzLnBocCIpOwoKICAkdG9fcHJvY2VzczsKCiAgaWYgKFJFUVVFU1RfVVJJID09ICIvIiAmJiBpc3NldCgkcm91dGVzWyJST09UIl0pKSB7CiAgICAkdG9fcHJvY2VzcyA9ICRyb3V0ZXNbIlJPT1QiXTsKICB9IGVsc2UgewogICAgaWYgKCFpc3NldCgkcm91dGVzW01FVEhPRF1bUkVRVUVTVF9VUkldKSkgewogICAgICBkaWUoIk5vIHJvdXRlIGZvdW5kLiIpOwogICAgfQogICAgJHRvX3Byb2Nlc3MgPSAkcm91dGVzW01FVEhPRF1bUkVRVUVTVF9VUkldOwogIH0KCiAgJGNvbnRyb2xsZXIgPSAkdG9fcHJvY2Vzc1snY29udHJvbGxlciddOwogICRhY3Rpb24gICAgID0gJHRvX3Byb2Nlc3NbJ2FjdGlvbiddOwoKICAkY29udHJvbGxlcl9maWxlID0gJF9TRVJWRVJbIkRPQ1VNRU5UX1JPT1QiXS4iLy4uL2FwcC9jb250cm9sbGVycy97JGNvbnRyb2xsZXJ9X2NvbnRyb2xsZXIucGhwIjsKCiAgaWYgKCFmaWxlX2V4aXN0cygkY29udHJvbGxlcl9maWxlKSkgewogICAgZGllKCJDb250cm9sbGVyIGRvZXMgbm90IGV4aXN0LiIpOwogIH0KCiAgcmVxdWlyZSgkX1NFUlZFUlsiRE9DVU1FTlRfUk9PVCJdLiIvLi4vZmFjdG9yeS9jb250cm9sbGVyLnBocCIpOwogIHJlcXVpcmUoJGNvbnRyb2xsZXJfZmlsZSk7CgogICRjbGFzc1RtcCA9ICJ7JGNvbnRyb2xsZXJ9X2NvbnRyb2xsZXIiOwoKICAkY29udHJvbGxlckluc3QgPSBuZXcgJGNsYXNzVG1wOwoKICBpZiAoIW1ldGhvZF9leGlzdHMoJGNvbnRyb2xsZXJJbnN0LCAkYWN0aW9uKSkgewogICAgZGllKCJNZXRob2QgZG9lcyBub3QgZXhpc3QuIik7CiAgfQoKICAkY29udHJvbGxlckluc3QtPiRhY3Rpb24oKTsKCiAgJEdMT0JBTFNbInJlbmRlcmVkIl0gPSAkY29udHJvbGxlckluc3QtPl9fcmVuZGVyKCRhY3Rpb24pOwoKICAkbGF5b3V0OwoKICBpZiAoIWlzc2V0KCRfR0xPQkFMU1sibGF5b3V0Il0pKSB7CiAgICBpZiAoZmlsZV9leGlzdHMoJF9TRVJWRVJbIkRPQ1VNRU5UX1JPT1QiXS4iLy4uL2FwcC92aWV3cy9sYXlvdXRzL3skY29udHJvbGxlcn0ucGhwIikpIHsKICAgICAgJGxheW91dCA9ICRfU0VSVkVSWyJET0NVTUVOVF9ST09UIl0uIi8uLi9hcHAvdmlld3MvbGF5b3V0cy97JGNvbnRyb2xsZXJ9LnBocCI7CiAgICB9IGVsc2UgewogICAgICAkbGF5b3V0ID0gJF9TRVJWRVJbIkRPQ1VNRU5UX1JPT1QiXS4iLy4uL2FwcC92aWV3cy9sYXlvdXRzL2FwcGxpY2F0aW9uLnBocCI7CiAgICB9CiAgfSBlbHNlIHsKICAgICRmaWxlID0gJF9TRVJWRVJbIkRPQ1VNRU5UX1JPT1QiXS4iLy4uL2FwcC92aWV3cy9sYXlvdXRzL3skR0xPQkFMU1sibGF5b3V0Il19LnBocCI7CiAgICBpZiAoIWZpbGVfZXhpc3RzKCRmaWxlKSkgewogICAgICBkaWUoIkxheW91dCBkb2VzIG5vdCBleGlzdC4iKTsKICAgIH0KICAgICRsYXlvdXQgPSAkZmlsZTsKICB9CgogIGluY2x1ZGUoJGxheW91dCk7Cgo/Pgo=");
define("ROUTES", "PD9waHAKLy8gTGVhdmUgdGhpcyBsaW5lIGFsb25lCiRyb3V0ZXMgPSBbIkdFVCIgPT4gW10sICJQT1NUIiA9PiBbXV07CgovLyBPcHRpb25hbDoKLy8gJHJvdXRlc1siUk9PVCJdID0gWyJjb250cm9sbGVyIiA9PiAibWFpbiIsICJhY3Rpb24iID0+ICJpbmRleCJdCgovLyBBZGQgcm91dGVzIGZvciBnZXQgcmVxdWVzdHMgaGVyZQokcm91dGVzWyJHRVQiXSA9IFsKCl07CgovLyBBZGQgcm91dGVzIGZvciBwb3N0IHJlcXVlc3RzIGhlcmUKJHJvdXRlc1siUE9TVCJdID0gWwogIApdOwo/Pgo=");

switch ($argv[1]) {
  case "g":
  case "generate": {
    switch ($argv[2]) {
      case "controller": {
        $name = $argv[3];

        $actions;

        if (!$argv[4])
          $actions = [];
        else
          $actions = array_slice($argv, 4);

        $actionsParsed = [];

        $defAction = base64_decode(DEFAULT_ACTION);

        foreach ($actions as $action) {
          $new = str_replace("%%ACTIONNAME%%", $action, $defAction);
          $actionsParsed[] = $new;
        }

        $defController = base64_decode(DEFAULT_CONTROLLER);

        $actions = "";

        foreach ($actionsParsed as $action) {
          if ($actions == "") {
            $actions = $action;
            continue;
          }

          $actions .= "\r\n".$action;
        }

        $controllerParsed = str_replace("%%ACTIONDEFS%%", $actions, $defController);
        $controllerParsed = str_replace("%%CONTROLLERNAME%%", $name, $controllerParsed);

        file_put_contents(__DIR__."/app/controllers/{$name}_controller.php", $controllerParsed);

        break;
      }
      case "m":
      case "model": {
        $name = $argv[3];

        $defModel = base64_decode(DEFAULT_MODEL);

        $modelParsed = str_replace("%%MODELNAME%%", $name, $defModel);

        file_put_contents(__DIR__."/app/models/$name.php", $modelParsed);
      }
    }
    break;
  }
  case "routes": {
    require_once('config/routes.php');
    process($routes["GET"]);
    process($routes["POST"]);
    break;
  }
  case "new": {
    mkdir("./app");
    echo "Created application directory ./app\r\n";
    mkdir("./app/assets");
    echo "Created assets directory ./app/assets\r\n";
    mkdir("./app/assets/javascripts");
    echo "Created javascripts directory ./app/assets/javascripts\r\n";
    mkdir("./app/assets/stylesheets");
    echo "Created stylesheets directory ./app/assets/stylesheets\r\n";
    mkdir("./app/controllers");
    echo "Created controllers directory ./app/controllers\r\n";
    mkdir("./app/models");
    echo "Created models directory ./app/models\r\n";
    mkdir("./app/views");
    echo "Created views directory ./app/views\r\n";
    mkdir("./app/views/layouts");
    echo "Created layouts directory ./app/views/layouts\r\n";
    file_put_contents(__DIR__."/app/views/layouts/application.php", base64_decode(DEFAULT_LAYOUT));
    echo "Created default application layout ./app/views/layouts/application.php\r\n";
    mkdir("./config");
    echo "Created configuration directory ./config\r\n";
    file_put_contents(__DIR__."/config/database.php", base64_decode(DATABASE));
    echo "Created default database configuration at ./config/database.php\r\n";
    file_put_contents(__DIR__."/config/routes.php", base64_decode(ROUTES));
    echo "Created default router configuration at ./config/routes.php\r\n";
    mkdir("./public");
    echo "Created application public directory ./public\r\n";
    mkdir("./router");
    echo "Created router directory ./router\r\n";
    file_put_contents(__DIR__."/router/router.php", base64_decode(ROUTER));
    echo "Create default router at ./router/router.php";
    echo "\r\n\r\nApp created.";
  }
}

function process($arr) {
  foreach ($arr as $name => $ignored) {
    if (!file_exists(__DIR__."/public/".$name)) {
      echo "Directory ".__DIR__."/public/".$name." does not exist. Creating...\r\n";
      if (mkdir(__DIR__."/public/".$name))
        echo "Created.\r\n";
      else
        echo "Failed.\r\n";
    }
    if (!file_exists(__DIR__."/public/".$name."/index.php")) {
      echo "File ".__DIR__."/public/".$name."/index.php does not exist. Creating...\r\n";
      if (file_put_contents(__DIR__."/public/$name/index.php", base64_decode(DEFAULT_ROUTE)))
        echo "Created.\r\n";
      else
        echo "Failed.\r\n";
    }
  }
}
?>
