from __future__ import with_statement
from setuptools import setup, find_packages

version = {}  # will be set by exec below

with open('pycounter/version.py', 'rb') as fp:
    exec(fp.read(), version)

with open('README.rst') as readmefile:
    readme = readmefile.read()

setup(
    name='pycounter',
    version=version['__version__'],
    packages=find_packages(),
    author='Health Sciences Library System, University of Pittsburgh',
    author_email='speargh@pitt.edu',
    maintainer='Geoffrey Spear',
    maintainer_email='speargh@pitt.edu',
    url='http://www.github.com/pitthsls/pycounter',
    description='Project COUNTER/NISO SUSHI statistics',
    long_description=readme,
    keywords='library COUNTER journals usage_statistics SUSHI',
    test_suite='pycounter.test',
    classifiers=[
        'Development Status :: 3 - Alpha',
        'License :: OSI Approved :: MIT License',
        'Intended Audience :: Developers',
        'Programming Language :: Python :: 2.6',
        'Programming Language :: Python :: 2.7',
        'Programming Language :: Python :: 3.3',
        'Programming Language :: Python :: 3.4',
        ],
    install_requires=['pyisbn', 'openpyxl', 'lxml', 'requests',
                      'six', 'python-dateutil'],
    tests_require=['httmock'],
    )
