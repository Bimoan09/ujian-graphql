# ujian-graphql

to acces graphQL with cURL.. anter your terminal..

#GET
+ $curl -XGET T \-H "Content-Type:application/json" \--data '{ "query": "{ users{name,email,jabatan}}" }' "localhost:8000/graphql"
and the results
+ {"data":{"users":[{"name":"kibo","email":"bian@gmail.com","jabatan":"backend develloper"}]}}
+ {"data":{"users":[{"name":"buimo","email":"buimo@gmail.com","jabatan":"accounting"}]}}

#GET by ID
+ $curl -XGET T \-H "Content-Type:application/json" \--data '{ "query": "{ users(id:1){name,email,jabatan}}" }' "localhost:8000/graphql"
the results
+ {"data":{"users":[{"name":"kibo","email":"bian@gmail.com","jabatan":"backend develloper"}]}}
+ $curl -XGET T \-H "Content-Type:application/json" \--data '{ "query": "{ users(id:2){name,email,jabatan}}" }' "localhost:8000/graphql"
the results
+ {"data":{"users":[{"name":"buimo","email":"buimo@gmail.com","jabatan":"accounting"}]}}
