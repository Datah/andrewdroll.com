rm /blu/data/gnowit.log.*
rm nohup.out
kill -9 `ps -aef | grep gserver | grep -v grep | awk '{print $2}'`
nohup java -Dfile.encoding=UTF-8 -Xmx2G -XX:OnOutOfMemoryError="/blu/code/cycle_prod.sh" -Djava.library.path="/usr/lib/"  -DRelEx.algpath="/blu/code/resources/" -Drelex.tagalgpath="/blu/code/resources/data/relex-tagging-algs.txt" -Drelex.semalgpath="/blu/code/resources/data/relex-tagging-algs.txt"  -Drelex.pennalgpath="/blu/code/resources/data/relex-penn-tagging-algs.txt" -Drelex.sfalgpath="/blu/code/resources/data/relex-stanford-algs.txt"  -Dwordnet.configfile="/blu/code/data/wordnet/file_properties.xml" -jar -server /blu/code/svn/gnowit/gserver/dist/gserver.jar PRODUCTION_SLAVE > /dev/null&
rm nohup.out
#tail -f /blu/data/gnowit.log.0

